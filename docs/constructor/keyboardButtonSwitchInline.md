# keyboardButtonSwitchInline

**Description** : *Button to force a user to switch to inline mode: pressing the button will prompt the user to select one of their chats, open that chat and insert the bot&#039;s username and the specified inline query in the input field*

**Layer** : 218

```tl
keyboardButtonSwitchInline#93b9fbb5 flags:# same_peer:flags.0?true text:string query:string peer_types:flags.1?Vector<InlineQueryPeerType> = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **same_peer** | [`flags.0?true`](type/true) | If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field |
| <mark>text</mark> | [`string`](type/string) | Button label |
| <mark>query</mark> | [`string`](type/string) | The inline query to use |
| **peer_types** | [`flags.1?Vector<InlineQueryPeerType>`](type/InlineQueryPeerType) | Filter to use when selecting chats |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonSwitchInline(
	same_peer : true,
	text : 'QksbrIdMNOJu85ow',
	query : 'obqFpZKS7zMtfcEX',
	peer_types : array(
		$client->inlineQueryPeerTypeSameBotPM(),
		$client->inlineQueryPeerTypePM(),
		$client->inlineQueryPeerTypeChat(),
		$client->inlineQueryPeerTypeMegagroup(),
		$client->inlineQueryPeerTypeBroadcast(),
		$client->inlineQueryPeerTypeBotPM(),
	),
);
```