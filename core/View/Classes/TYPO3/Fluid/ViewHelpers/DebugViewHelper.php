<?php
namespace TYPO3\Fluid\ViewHelpers;

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */
/**
 * This ViewHelper generates a HTML dump of the tagged variable.
 *
 * = Examples =
 *
 * <code title="Simple">
 * <f:debug>{testVariables.array}</f:debug>
 * </code>
 * <output>
 * foobarbazfoo
 * </output>
 *
 * <code title="All Features">
 * <f:debug title="My Title" maxDepth="5" blacklistedClassNames="{0:'Tx_BlogExample_Domain_Model_Administrator'}" plainText="TRUE" ansiColors="FALSE" inline="TRUE" blacklistedPropertyNames="{0:'posts'}">{blogs}</f:debug>
 * </code>
 * <output>
 * [A HTML view of the var_dump]
 * </output>
 */
class DebugViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * A wrapper for Tx_Extbase_Utility_Debugger::var_dump().
	 *
	 * @param string $title optional custom title for the debug output
	 * @param integer $maxDepth Sets the max recursion depth of the dump (defaults to 8). De- or increase the number according to your needs and memory limit.
	 * @param boolean $plainText If TRUE, the dump is in plain text, if FALSE the debug output is in HTML format.
	 * @param boolean $ansiColors If TRUE, ANSI color codes is added to the plaintext output, if FALSE (default) the plaintext debug output not colored.
	 * @param boolean $inline if TRUE, the dump is rendered at the position of the <f:debug> tag. If FALSE (default), the dump is displayed at the top of the page.
	 * @param array $blacklistedClassNames An array of class names (RegEx) to be filtered. Default is an array of some common class names.
	 * @param array $blacklistedPropertyNames An array of property names and/or array keys (RegEx) to be filtered. Default is an array of some common property names.
	 * @return string
	 */
	public function render($title = NULL, $maxDepth = 8, $plainText = FALSE, $ansiColors = FALSE, $inline = FALSE, $blacklistedClassNames = NULL, $blacklistedPropertyNames = NULL) {
		echo '<pre style="position: absolute; left: 0; top: 0; width: 100%; "><ul style="background: #dedede; padding: 15px; margin: 0 auto; width: 80%;">';
		$children = $this->renderChildren();

		if (!is_array($children)) {
			echo '<li style="color: #f90; background: #efefef; list-style: none; margin: 0 0 5px 0; padding: 5px; border: 1px dotted #666;"><span>' . $children . '</span></li>';
		} else {
			foreach ($children as $key => $value) {
				if (is_array($value)) {
					echo '<li style="color: #f90; background: #efefef; list-style: none; margin: 0 0 5px 0; padding: 5px; border: 1px dotted #666;">' . $key . ' { <br>';
					foreach ($value as $subKey => $subValue) {
						if (is_array($subValue)) {
							echo '<span style="color: #f90; display: block; background: #efefef; list-style: none; margin: 0 0 5px 0; padding: 5px;">' . $subKey . ' { <br>';
							foreach ($subValue as $subsubKey => $subsubValue) {
								if (is_array($subsubValue)) {
									echo '<span style="color: #090; display: block; background: #efefef; list-style: none; margin: 0 0 5px 0; padding: 5px;">' . $subsubKey . ' { <br>';
									foreach ($subsubValue as $subsubsubKey => $subsubsubValue) {
										if (is_array($subsubsubValue)) {
											echo '<span style="color: #009; display: block; background: #efefef; list-style: none; margin: 0 0 5px 0; padding: 5px;">' . $subsubsubKey . ' { <br>';
											foreach ($subsubsubValue as $subsubsubsubKey => $subsubsubsubValue) {
												echo '<span style="color: #000; margin-left: 20px; display: block;">' . $subsubsubsubKey . ': ' . $subsubsubsubValue . '</span>';
											}
											echo '}</span>';
										} else {
											echo '<span style="margin-left: 20px; display: block;">' . $subsubsubKey . ': ' . $subsubsubValue . '</span>';
										}
									}
									echo '}</span>';
								} else {
									echo '<span style="margin-left: 20px; display: block;">' . $subsubKey . ': ' . $subsubValue . '</span>';
								}
							}
							echo '}</span>';
						} else {
							echo '<span style="color: #090; margin-left: 20px; display: block;">' . $subKey . ': ' . $subValue . '</span>';
						}
					}
					echo '}</li>';
				} else {
					echo '<li style="color: #f90; background: #efefef; list-style: none; margin: 0 0 5px 0; padding: 5px; border: 1px dotted #666;">' . $key . ': <span>' . $value . '</span></li>';
				}
			}
		}
		echo '</ul></pre>';
	}
}
