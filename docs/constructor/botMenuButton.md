# botMenuButton

**Description** : *Bot menu button that opens a web app when clicked*

**Layer** : 214

```tl
botMenuButton#c7b57ce6 text:string url:string = BotMenuButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Title to be displayed on the menu button instead of 'Menu' |
| <mark>url</mark> | [`string`](type/string) | URL of a web app to open when the user clicks on the button |

---

## Type

[BotMenuButton](type/BotMenuButton)

---

## Example

```php
$botMenuButton = $client->botMenuButton(
	text : 'CliZjkhfpRzBqg34',
	url : 'https://docs.liveproto.dev',
);
```