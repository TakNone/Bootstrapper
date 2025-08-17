# BotMenuButton

**Description** : *Indicates the action to execute when pressing the in-UI menu button for bots*

**Layer** : 211

```tl
botMenuButtonDefault#7533a588 = BotMenuButton;
botMenuButtonCommands#4258c205 = BotMenuButton;
botMenuButton#c7b57ce6 text:string url:string = BotMenuButton;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**botMenuButtonDefault**](constructor/botMenuButtonDefault) | Placeholder bot menu button never returned to users: see the docs for more info |
| [**botMenuButtonCommands**](constructor/botMenuButtonCommands) | Bot menu button that opens the bot command list when clicked |
| [**botMenuButton**](constructor/botMenuButton) | Bot menu button that opens a web app when clicked |