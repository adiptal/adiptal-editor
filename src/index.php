<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta http-equiv="Expires" content="private, max-age=3600, must-revalidate">
    <meta http-equiv="Cache-control" content="private, max-age=3600, must-revalidate">

    <title>Adiptal Editor</title>

    <!-- FUNCTIONALITY  -->
    <link rel="stylesheet" href="assets/css/main.min.css"/>

    <link rel="stylesheet" href="ui/assets/css/default.min.css"/>
</head>
<body spellcheck="false">
    <div class="fk">
        <!-- EDITOR INSTANCE -->
        <div class="fl"></div>
        <!-- TOAST MESSAGE -->
        <div class="gn"></div>



        <!-- CONTEXT MENU -->
        <div class="gb ez">
            <div class="gs">
                <button aria-label="Edit" class="fb gf" data-bu="el">
                    <i class="fas fa-pen"></i>
                </button>
                <button aria-label="Move" class="fb" data-bu="em">
                    <i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i>
                </button>
                <button aria-label="Clone" class="fb" data-bu="en">
                    <i class="far fa-clone"></i>
                </button>
                <button aria-label="Delete" class="fb" data-bu="eh">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="gb ey">
            <div class="gg">
                <button>Rows&nbsp;&nbsp;<i class="fas fa-caret-down"></i></button>
                <ul>
                    <li>
                        <div class="gs">
                            <button class="fx" data-bu="THEAD">Header</button>
                            <button class="fx" data-bu="TBODY">Body</button>
                            <button class="fx" data-bu="TFOOT">Footer</button>
                        </div>
                    </li>
                    <li><button class="fx" data-bu="dy">Add Row Above</button></li>
                    <li><button class="fx" data-bu="dz">Add Row Below</button></li>
                    <li><button class="fx" data-bu="ee">Delete Row</button></li>
                </ul>
            </div>
            <div class="gg">
                <button>Columns&nbsp;&nbsp;<i class="fas fa-caret-down"></i></button>
                <ul>
                    <li><button class="fy" data-bu="eb">Add Column Left</button></li>
                    <li><button class="fy" data-bu="ec">Add Column Right</button></li>
                    <li><button class="fy" data-bu="ef">Delete Column</button></li>
                </ul>
            </div>
            <div class="gg">
                <button>Cells&nbsp;&nbsp;<i class="fas fa-caret-down"></i></button>
                <ul>
                    <li>
                        <div class="gs">
                            <button class="iy" data-bu="LEFT" aria-label="Left"><i class="fas fa-align-left"></i></button>
                            <button class="iy" data-bu="CENTER" aria-label="Center"><i class="fas fa-align-center"></i></button>
                            <button class="iy" data-bu="RIGHT" aria-label="Right"><i class="fas fa-align-right"></i></button>
                            <button class="iy" data-bu="JUSTIFY" aria-label="Justify"><i class="fas fa-align-justify"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="gb gt">
            <div class="gs">
                <button class="gu" aria-label="Edit"><i class="fas fa-pen"></i></button>
            </div>
        </div>

        <div class="gb fc">
            <ul>
                <li><button class="fd" data-bu="eh">Delete</button></li>
                <li><button class="fd gf" data-bu="eg">Delete Selected</button></li>
            </ul>
        </div>
        <div class="jc"></div>
        <!-- END CONTEXT MENU -->



        <!-- MODAL -->
        <div class="gh" data-bt="cf">
            <div class="gi ff">
                <header class="ia">
                    <h2>Properties</h2>
                </header>

                <div class="ib">
                    <div class="fj">
                        <input type="text" required>
                        <label>Title</label>
                    </div>

                    <div class="fj">
                        <textarea required></textarea>
                        <label>Description</label>
                    </div>
                </div>

                <div class="iq">
                    <ul>
                        <li><button class="gl">Continue</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="cg">
            <div class="gi">
                <header class="ia">
                    <h2>Emojis</h2>
                </header>

                <div class="ib">
                </div>

                <div class="iq">
                    <ul>
                        <li class="gj">
                            <div class="gg">
                                <button><span>Categories</span>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></button>
                                <ul></ul>
                            </div>
                        </li>

                        <li><button class="gk">Cancel</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="ch">
            <div class="gi">
                <header class="ia">
                    <h2>Special Characters</h2>
                </header>

                <div class="ib">
                </div>

                <div class="iq">
                    <ul>
                        <li class="gj">
                            <div class="gg">
                                <button><span>Categories</span>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></button>
                                <ul></ul>
                            </div>
                        </li>

                        <li><button class="gk">Cancel</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="ci">
            <div class="gi">
                <header class="ia">
                    <h2>File Info</h2>
                </header>

                <div class="ib">
                </div>

                <div class="iq">
                    <ul>
                        <li><button class="gk">Close</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="cj">
            <div class="gi">
                <header class="ia">
                    <h2>Table</h2>
                </header>

                <div class="ib">
                    <div class="fj">
                        <input type="text" required>
                        <label>Columns</label>
                    </div>
                </div>

                <div class="iq">
                    <ul>
                        <li class="gj hf"><input class="hb" type="file" accept=".csv"><button class="fh">Import CSV</button></li>
                        <li><button class="gk">Cancel</button></li>
                        <li><button class="gl">Insert</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="ck">
            <div class="gi">
                <header class="ia">
                    <h2>Media Embed</h2>
                </header>

                <div class="ib">
                    <div class="fj">
                        <input type="text" required>
                        <label>Link</label>
                    </div>
                </div>

                <div class="iq">
                    <ul>
                        <li class="gj hf"><button class="fh">Html Embed</button></li>
                        <li><button class="gk">Cancel</button></li>
                        <li><button class="gl">Insert</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="cl">
            <div class="gi">
                <header class="ia">
                    <h2>Link</h2>
                </header>

                <div class="ib">
                    <div class="fj">
                        <input type="text" required>
                        <label>Link</label>
                    </div>

                    <div class="fj">
                        <input type="text" required>
                        <label>Title</label>
                    </div>

                    <button class="gm">New Tab <span data-bx="0"></span></button>
                </div>

                <div class="iq">
                    <ul>
                        <li><button class="gk">Cancel</button></li>
                        <li><button class="gl">Insert</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="cm">
            <div class="gi ff">
                <header class="ia">
                    <h2>Images</h2>
                </header>

                <div class="ib">
                    <div class="gp">
                        <div class="fj">
                            <input type="text" required>
                            <label>Link</label>
                        </div>
                        <button class="gz">Add Image</button>
                    </div>
                    <div class="gp">
                        <div class="gq"></div>
                        <div class="gy"></div>
                    </div>
                </div>

                <div class="iq">
                    <input class="ha" type="file" accept="image/*" multiple>
                    <ul>
                        <li class="gj hf">
                            <div class="im">
                                <button><span data-bt="Type">Type</span>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></button>
                                <ul>
                                    <li><button data-bu="gallery">Gallery</button></li>
                                    <li><button data-bu="carousel">Carousel</button></li>
                                </ul>
                            </div>
                        </li>

                        <li class="gj"><button class="fh" aria-label="Upload Image"><i class="fas fa-upload"></i></button></li>
                        <li><button class="gk">Cancel</button></li>
                        <li><button class="gl">Insert</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="cn">
            <div class="gi ff">
                <header class="ia">
                    <h2>Columns</h2>
                </header>

                <div class="ib"></div>

                <div class="iq">
                    <ul>
                        <li class="gj"><button class="fh" aria-label="Add Page"><i class="fas fa-plus"></i></button></li>
                        <li><button class="gk">Cancel</button></li>
                        <li><button class="gl">Insert</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="co">
            <div class="gi ff">
                <header class="ia">
                    <h2>Accordion</h2>
                </header>

                <div class="ib"></div>

                <div class="iq">
                    <ul>
                        <li class="gj"><button class="fh" aria-label="Add Page"><i class="fas fa-plus"></i></button></li>
                        <li><button class="gk">Cancel</button></li>
                        <li><button class="gl">Insert</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="cp">
            <div class="gi ff">
                <header class="ia">
                    <h2>Tab</h2>
                </header>

                <div class="ib"></div>

                <div class="iq">
                    <ul>
                        <li class="gj hf">
                            <div class="im">
                                <button><span data-bt="Type">Type</span>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></button>
                                <ul>
                                    <li><button data-bu="vertical">Vertical</button></li>
                                    <li><button data-bu="horizontal">Horizontal</button></li>
                                </ul>
                            </div>
                        </li>
                        <li class="gj"><button class="fh" aria-label="Add Page"><i class="fas fa-plus"></i></button></li>
                        <li><button class="gk">Cancel</button></li>
                        <li><button class="gl">Insert</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="cq">
            <div class="gi ff">
                <header class="ia">
                    <h2>Alert</h2>
                </header>

                <div class="ib"></div>

                <div class="iq">
                    <ul>
                        <li class="gj hf">
                            <div class="im">
                                <button><span data-bt="Type">Type</span>&nbsp;&nbsp;<i class="fas fa-caret-down"></i></button>
                                <ul>
                                    <li><button data-bu="notice">Notice</button></li>
                                    <li><button data-bu="info">Info</button></li>
                                    <li><button data-bu="success">Success</button></li>
                                    <li><button data-bu="warning">Warning</button></li>
                                    <li><button data-bu="danger">Danger</button></li>
                                </ul>
                            </div>
                        </li>
                        <li><button class="gk">Cancel</button></li>
                        <li><button class="gl">Insert</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="ew">
            <div class="gi">
                <header class="ia">
                    <h2>Edit Disabled</h2>
                </header>

                <div class="ib">
                    <p>File is being edited by <span></span>.</p>
                </div>

                <div class="iq">
                    <ul>
                        <li><button class="gk">Close</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gh" data-bt="ev">
            <div class="gi ff">
                <header class="ia">
                    <h2>Key Shortcuts</h2>
                </header>

                <div class="ib">
                    <div class="adiptal-ui">
                        <table>
                            <thead>
                                <tr>
                                    <th>Windows / Linux</th>
                                    <th>Mac</th>
                                    <th>Action</th>
                                    <th>Available</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+ <code>s</code></td>
                                    <td><code>cmd</code>&nbsp;+ <code>s</code></td>
                                    <td>Save</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>S</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>S</code></td>
                                    <td>Autosave&nbsp;( Toggle on/off )</td>
                                    <td><i class="far fa-gem"></i>&nbsp;<strong>Pro</strong></td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>f</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>f</code></td>
                                    <td>Find and Replace</td>
                                    <td><i class="far fa-gem"></i>&nbsp;<strong>Pro</strong></td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>p</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>p</code></td>
                                    <td>Print</td>
                                    <td><i class="far fa-gem"></i>&nbsp;<strong>Pro</strong></td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>I</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+ <code>I</code></td>
                                    <td>Import</td>
                                    <td><i class="far fa-gem"></i>&nbsp;<strong>Pro</strong></td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>E</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>E</code></td>
                                    <td>Export</td>
                                    <td><i class="far fa-gem"></i>&nbsp;<strong>Pro</strong></td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>F</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>F</code></td>
                                    <td>Fullscreen ( Toggle on/off )</td>
                                    <td><i class="far fa-gem"></i>&nbsp;<strong>Pro</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4"><strong>Popup / Modal</strong></td>
                                </tr>
                                <tr>
                                    <td><code>Esc</code></td>
                                    <td><code>Esc</code></td>
                                    <td>Cancel</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>Enter</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>Enter</code></td>
                                    <td>Submit</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><strong>Insert Element </strong></td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>H</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>H</code></td>
                                    <td>Heading</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>P</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+ <code>P</code></td>
                                    <td>Paragraph</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>B</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>B</code></td>
                                    <td>Blockquote</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>alt</code>&nbsp;+&nbsp;<code>h</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>alt</code>&nbsp;+&nbsp;<code>h</code></td>
                                    <td>Html&nbsp;Embed</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+ <code>alt</code>&nbsp;+&nbsp;<code>p</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>alt</code>&nbsp;+ <code>p</code></td>
                                    <td>Preformatted</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>U</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>U</code></td>
                                    <td>Unorder List</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>O</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>O</code></td>
                                    <td>Order List</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>C</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>C</code></td>
                                    <td>Check List</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>+&nbsp;<code>alt</code>&nbsp;+&nbsp;<code>P</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>+&nbsp;<code>alt</code>&nbsp;+&nbsp;<code>P</code></td>
                                    <td>Page Break</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><strong>Text Style </strong></td>
                                </tr>
                                <tr>
                                    <td><code>shift</code>&nbsp;+&nbsp;<code>Enter</code></td>
                                    <td><code>shift</code>&nbsp;+&nbsp;<code>Enter</code></td>
                                    <td>Enter/New Line</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>b</code></td>
                                    <td><code>cmd</code>&nbsp;+ <code>b</code></td>
                                    <td>Bold</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>i</code></td>
                                    <td><code>cmd</code>&nbsp;+ <code>i</code></td>
                                    <td>Italic</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>u</code></td>
                                    <td><code>cmd</code>&nbsp;+ <code>u</code></td>
                                    <td>Underline</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>d</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>d</code></td>
                                    <td>Strikethrough</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>Arrow Up</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>Arrow Up</code></td>
                                    <td>Superscript</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>Arrow Down</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>Arrow Down</code></td>
                                    <td>Subscript</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>h</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>h</code></td>
                                    <td>Inline Code</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>]</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>]</code></td>
                                    <td>Increase Indent</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>[</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>[</code></td>
                                    <td>Decrease Indent</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>l</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>l</code></td>
                                    <td>Align Left</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>e</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>e</code></td>
                                    <td>Align Center</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>r</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>r</code></td>
                                    <td>Align Right</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>j</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>j</code></td>
                                    <td>Align Justify</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>R</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+&nbsp;<code>R</code></td>
                                    <td>Paragraph Direction ( RTL / LTR )</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+ <code>L</code></td>
                                    <td><code>cmd</code>&nbsp;+ <code>shift</code>&nbsp;+ <code>L</code></td>
                                    <td>Create/Edit&nbsp;Inline Link</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td><code>ctrl</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+ <code>alt</code> +&nbsp;<code>R</code></td>
                                    <td><code>cmd</code>&nbsp;+&nbsp;<code>shift</code>&nbsp;+ <code>alt</code> +&nbsp;<code>R</code></td>
                                    <td>Remove Format</td>
                                    <td>Free</td>
                                </tr>
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                </div>

                <div class="iq">
                    <ul>
                        <li><button class="gk">Close</button></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END MODAL -->
    </div>

    <!-- FUNCTIONALITY  -->
    <script src="ui/assets/js/default.min.js"></script>
    <script src="assets/js/functionality.min.js"></script>
</body>
</html>