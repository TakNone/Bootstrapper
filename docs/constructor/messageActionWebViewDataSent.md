# messageActionWebViewDataSent

**Description** : *Data from an opened reply keyboard bot mini app was relayed to the bot that owns it (user side service message)*

**Layer** : 211

```tl
messageActionWebViewDataSent#b4c38cb5 text:string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Text of the keyboardButtonSimpleWebView that was pressed to open the web app |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionWebViewDataSent(
	text : 'YmjF120aZG6QcovS',
);
```