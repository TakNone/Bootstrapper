# replyInlineMarkup

**Description** : *Represents an inline keyboard*

**Layer** : 229

```tl
replyInlineMarkup#b2b15770 flags:# force_reply:flags.5?true rows:Vector<KeyboardInlineButtonRow> = ReplyMarkup;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **force_reply** | [`flags.5?true`](type/true) | NOTHING |
| <mark>rows</mark> | [`Vector<KeyboardInlineButtonRow>`](type/KeyboardInlineButtonRow) | Bot or inline keyboard rows |

---

## Type

[ReplyMarkup](type/ReplyMarkup)

---

## Example

```php
$replyMarkup = $client->replyInlineMarkup(
	force_reply : true,
	rows : array(
		$client->keyboardInlineButtonRow(
			buttons : array(
				$client->keyboardInlineButton(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -1941746684529434011,
					),
					text : 'vDwabi6Jmq42rxtA',
					type : $client->inlineButtonTypeUrl(
						url : 'https://docs.liveproto.dev',
					),
				),
			),
		),
	),
);
```