# pageBlockButtonRow

**Layer** : 229

```tl
pageBlockButtonRow#6d640318 flags:# align_left:flags.0?true align_center:flags.1?true align_right:flags.2?true buttons:Vector<PageButton> = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **align_left** | [`flags.0?true`](type/true) | NOTHING |
| **align_center** | [`flags.1?true`](type/true) | NOTHING |
| **align_right** | [`flags.2?true`](type/true) | NOTHING |
| <mark>buttons</mark> | [`Vector<PageButton>`](type/PageButton) | NOTHING |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockButtonRow(
	align_left : true,
	align_center : true,
	align_right : true,
	buttons : array(
		$client->pageButton(
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
		),
	),
);
```