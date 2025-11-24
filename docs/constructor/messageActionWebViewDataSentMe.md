# messageActionWebViewDataSentMe

**Description** : *Data from an opened reply keyboard bot mini app was relayed to the bot that owns it \(bot side service message\)*

**Layer** : 218

```tl
messageActionWebViewDataSentMe#47dd8079 text:string data:string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Text of the keyboardButtonSimpleWebView that was pressed to open the web app |
| <mark>data</mark> | [`string`](type/string) | Relayed data |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionWebViewDataSentMe(
	text : 'meB2y4fXuFQnlO73',
	data : '2mvzsHAIxbgcOByD',
);
```