# textButton

**Layer** : 229

```tl
textButton#afc79cd6 flags:# text:RichText type:InlineButtonType style:flags.0?RichButtonStyle = RichText;
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

[RichText](type/RichText)

---

## Example

```php
$richText = $client->textButton(
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