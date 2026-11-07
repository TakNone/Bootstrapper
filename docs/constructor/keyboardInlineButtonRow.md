# keyboardInlineButtonRow

**Layer** : 229

```tl
keyboardInlineButtonRow#19420af6 buttons:Vector<KeyboardInlineButton> = KeyboardInlineButtonRow;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>buttons</mark> | [`Vector<KeyboardInlineButton>`](type/KeyboardInlineButton) | NOTHING |

---

## Type

[KeyboardInlineButtonRow](type/KeyboardInlineButtonRow)

---

## Example

```php
$keyboardInlineButtonRow = $client->keyboardInlineButtonRow(
	buttons : array(
		$client->keyboardInlineButton(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -7627790660102297928,
			),
			text : 'vG817qAKUYcJ2IHx',
			type : $client->inlineButtonTypeUrl(
				url : 'https://docs.liveproto.dev',
			),
		),
	),
);
```