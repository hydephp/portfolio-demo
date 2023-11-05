<section class="code-card">
    <header>
        <menu>
            <button class="red"></button>
            <button class="yellow"></button>
            <button class="green"></button>
        </menu>
        <h1>_pages/index.md</h1>
    </header>

    <article>
        <main>
            <style> /* Margin and rounding are personal preferences, overflow-x-auto is recommended. */ pre { border-radius: 0.25rem; margin-top: 1rem; margin-bottom: 1rem; overflow-x: auto; } /* Add some vertical padding and expand the width to fill its container. The horizontal padding comes at the line level so that background colors extend edge to edge. */ pre code.torchlight { display: block; min-width: -webkit-max-content; min-width: -moz-max-content; min-width: max-content; padding-top: 1rem; padding-bottom: 1rem; } /* Horizontal line padding to match the vertical padding from the code block above. */ pre code.torchlight .line { padding-left: 1rem; padding-right: 1rem; } /* Push the code away from the line numbers and summary caret indicators. */ pre code.torchlight .line-number, pre code.torchlight .summary-caret { margin-right: 1rem; } </style>
            <style>
                #code-card-wrapper {
                    padding: 1rem;
                    resize: horizontal;
                    overflow: hidden;
                    max-width: 100%;

                    width: 80ch; /* Todo see if we can add JS to sync resize changes to data state */
                }

                #code-card-wrapper:hover {
                    outline: rgba(255, 255, 255, 0.5) solid;
                }

                .code-card {
                    overflow: hidden;
                    background: #292d3e;
                    width: 100%;
                    border-radius: 8px;
                }

                .code-card main>pre {
                    margin: 0;
                }
                .code-card main>code {
                    font-family: 'Fira Code', monospace
                }

                .code-card header {
                    padding: 8px 4px;
                    background: #212529;
                    color: #fff;
                    display: flex;
                    align-items: center
                }

                .code-card header h1 {
                    font-size: 14px;
                    font-weight: 400;
                    margin: 0 auto;
                    color: rgba(255, 255, 255, .75);
                    font-family: sans-serif
                }

                .code-card header menu {
                    user-select: none;
                    margin-left: 10px;
                    float: left;
                    position: absolute
                }

                .code-card header menu button {
                    all: unset;
                    display: inline-block;
                    width: 12px;
                    height: 12px;
                    border-radius: 50%;
                    cursor: pointer;
                    opacity: .75;
                    margin-right: 1px;
                }

                .code-card header menu button:hover {
                    opacity: 1
                }

                .code-card header menu button.red {
                    background-color: #f3615a
                }

                .code-card header menu button.yellow {
                    background-color: #f4c036
                }

                .code-card header menu button.green {
                    background-color: #3ccb3e
                }
            </style>
            <style>
                .line-number {
                    color:#3A3F58;
                    text-align: right;
                    -webkit-user-select: none;
                    user-select: none;
                    padding-left: 1rem;
                }

                .line-wrappable {
                    white-space: normal;
                    word-break: break-word;
                    width: 68rem;
                    display: inline-block;
                }

                @media (max-width: 1280px) {
                    .line-wrappable {
                        max-width: 85vw;
                    }
                }
                table {
                    border-collapse: collapse;
                    border-spacing: 0;
                    border: 0;
                }

                td {
                    padding: 0;
                    vertical-align: top;
                }
            </style>
            <pre style="white-space: nowrap">
                <code data-theme="material-theme-palenight" data-lang="markdown" class="torchlight" style="background-color: #292D3E; --theme-selection-background: #00000080;">
                    <table>
                        <tbody>
                        <!-- Syntax highlighted by torchlight.dev -->
                        <tr class="line">
                            <td><span class="line-number">&nbsp;1</span></td>
                            <td><span style="color: #89DDFF;">## </span><span style="color: #FFCB6B;">Hey there, I'm Jane Doe!</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">&nbsp;2</span></td>
                            <td>&nbsp;</tr>
                        <tr class="line">
                            <td><span class="line-number">&nbsp;3</span></td>
                            <td><span style="color: #89DDFF;"># </span><span style="color: #FFCB6B;">Freelance photographer</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">&nbsp;4</span></td>
                            <td>&nbsp;</tr>
                        <tr class="line">
                            <td><span class="line-number">&nbsp;5</span></td>
                            <td><span style="color: #89DDFF;">![</span><span style="color: #C3E88D;">Jane Doe</span><span style="color: #89DDFF;">]</span><span style="color: #89DDFF;">(</span><span style="color: #A6ACCD;">media/photographer.jpg</span><span style="color: #89DDFF;">)</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">&nbsp;6</span></td>
                            <td>&nbsp;</tr>
                        <tr class="line">
                            <td><span class="line-number">&nbsp;7</span></td>
                            <td><span style="color: #89DDFF;">## </span><span style="color: #FFCB6B;">About</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">&nbsp;8</span></td>
                            <td>&nbsp;</tr>
                        <tr class="line">
                            <td><span class="line-number">&nbsp;9</span></td>
                            <td class="line-wrappable"><span style="color: #A6ACCD;">This is a demo website built with </span><span style="color: #89DDFF;">[</span><span style="color: #C3E88D;">HydePHP</span><span style="color: #89DDFF;">]</span><span style="color: #89DDFF;">(</span><span style="color: #F07178;">http://hydephp.com/</span><span style="color: #89DDFF;">)</span><span style="color: #A6ACCD;">, a free and open source static site generator. This entire site is built using just Markdown text that is transformed into a fast and secure website that can be published anywhere.</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">10</span></td>
                            <td>&nbsp;</tr>
                        <tr class="line">
                            <td><span class="line-number">11</span></td>
                            <td class="line-wrappable"><span style="color: #A6ACCD;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur consectetur, nisi nisl aliquet nisi, euismod consectetur nisi nisi euismod nisi.</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">12</span></td>
                            <td>&nbsp;</tr>
                        <tr class="line">
                            <td><span class="line-number">13</span></td>
                            <td><span style="color: #89DDFF;">## </span><span style="color: #FFCB6B;">Gallery</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">14</span></td>
                            <td>&nbsp;</tr>
                        <tr class="line">
                            <td><span class="line-number">15</span></td>
                            <td><span style="color: #89DDFF;">![</span><span style="color: #C3E88D;">Austria</span><span style="color: #89DDFF;">]</span><span style="color: #89DDFF;">(</span><span style="color: #A6ACCD;">media/austria.jpg</span><span style="color: #89DDFF;">)</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">16</span></td>
                            <td><span style="color: #89DDFF;">![</span><span style="color: #C3E88D;">Boat</span><span style="color: #89DDFF;">]</span><span style="color: #89DDFF;">(</span><span style="color: #A6ACCD;">media/boat.jpg</span><span style="color: #89DDFF;">)</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">17</span></td>
                            <td><span style="color: #89DDFF;">![</span><span style="color: #C3E88D;">Croatia</span><span style="color: #89DDFF;">]</span><span style="color: #89DDFF;">(</span><span style="color: #A6ACCD;">media/croatia.jpg</span><span style="color: #89DDFF;">)</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">18</span></td>
                            <td><span style="color: #89DDFF;">![</span><span style="color: #C3E88D;">Fireworks</span><span style="color: #89DDFF;">]</span><span style="color: #89DDFF;">(</span><span style="color: #A6ACCD;">media/fireworks.jpg</span><span style="color: #89DDFF;">)</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">19</span></td>
                            <td><span style="color: #89DDFF;">![</span><span style="color: #C3E88D;">Hallstatt</span><span style="color: #89DDFF;">]</span><span style="color: #89DDFF;">(</span><span style="color: #A6ACCD;">media/hallstatt.jpg</span><span style="color: #89DDFF;">)</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">20</span></td>
                            <td><span style="color: #89DDFF;">![</span><span style="color: #C3E88D;">Lemonade</span><span style="color: #89DDFF;">]</span><span style="color: #89DDFF;">(</span><span style="color: #A6ACCD;">media/lemonade.jpg</span><span style="color: #89DDFF;">)</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">21</span></td>
                            <td><span style="color: #A6ACCD;">{.gallery}</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">22</span></td>
                            <td>&nbsp;</tr>
                        <tr class="line">
                            <td><span class="line-number">23</span></td>
                            <td>&nbsp;</tr>
                        <tr class="line">
                            <td><span class="line-number">24</span></td>
                            <td><span style="color: #89DDFF;">## </span><span style="color: #FFCB6B;">Contact</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">25</span></td>
                            <td>&nbsp;</tr>
                        <tr class="line">
                            <td><span class="line-number">26</span></td>
                            <td><span style="color: #89DDFF;">-</span><span style="color: #A6ACCD;"> Phone: +1 (123) 456-7890</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">27</span></td>
                            <td><span style="color: #89DDFF;">-</span><span style="color: #A6ACCD;"> Email: jane.doe@example.com</span></td>
                        </tr>
                        <tr class="line">
                            <td><span class="line-number">28</span></td>
                            <td><span style="color: #89DDFF;">-</span><span style="color: #A6ACCD;"> Address: 123 Main St, Anytown, CA 12345</span></td>
                        </tr>
                        </tbody>
                    </table>
                </code>
            </pre>
        </main>
    </article>
</section>