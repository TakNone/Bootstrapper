# pageButton

**Layer** : 233

```tl
pageButton#692a5488 flags:# text:RichText type:InlineButtonType style:flags.0?RichButtonStyle = PageButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>text</mark> | [`RichText`](type/RichText) | NOTHING |
| <mark>type</mark> | [`InlineButtonType`](type/InlineButtonType) | NOTHING |
| **style** | [`flags.0?RichButtonStyle`](type/RichButtonStyle) | NOTHING |

---

## Type

[PageButton](type/PageButton)

---

## Example

```php
$pageButton = $client->pageButton(
	text : $client->textEmpty(),
	type : $client->inlineButtonTypeUrl(
		url : 'https://docs.liveproto.dev',
	),
	style : $client->richButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		link : true,
	),
);
```