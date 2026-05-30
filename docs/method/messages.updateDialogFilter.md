# messages.updateDialogFilter

**Description** : *Update folder*

**Layer** : 222

```tl
messages.updateDialogFilter#1ad4a04a flags:# id:int filter:flags.0?DialogFilter = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`int`](type/int) | Folder ID |
| **filter** | [`flags.0?DialogFilter`](type/DialogFilter) | Folder info |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHATLIST_EXCLUDE_INVALID** | `400` | The specified exclude_peers are invalid |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **FILTER_ID_INVALID** | `400` | The specified filter ID is invalid |
| **FILTER_INCLUDE_EMPTY** | `400` | The include_peers vector of the filter is empty |
| **FILTER_TITLE_EMPTY** | `400` | The title field of the filter is empty |
| **MESSAGE_TOO_LONG** | `400` | The provided message is too long |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->updateDialogFilter(
	id : 52,
	filter : $client->dialogFilter(
		contacts : true,
		non_contacts : true,
		groups : true,
		broadcasts : true,
		bots : true,
		exclude_muted : true,
		exclude_read : true,
		exclude_archived : true,
		title_noanimate : true,
		id : 23,
		title : $client->textWithEntities(
			text : 'xcpwhWqrseFUQzi8',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 60,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 43,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 81,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 16,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 97,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 23,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 17,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 58,
					language : 'mTc3b8OCvFHjNa9Q',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 71,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 56,
					user_id : 5593150937265970029,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 61,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 94,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 45,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 19,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 59,
					document_id : 7736727875914383485,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 88,
				),
			),
		),
		emoticon : 'tPWZIsy1boqR6QGJ',
		color : 60,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```