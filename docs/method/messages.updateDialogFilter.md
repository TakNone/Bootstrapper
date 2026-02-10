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
	id : 88,
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
		id : 16,
		title : $client->textWithEntities(
			text : 'Zk5O8IMpDEUKXvyJ',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 62,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 59,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 64,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 72,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 12,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 39,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 48,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 8,
					language : 'hw5Xl24OReICtZnP',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 40,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : -1113999068079288468,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 25,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 32,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 52,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 53,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 36,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 41,
					document_id : 850337572359534756,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 63,
				),
			),
		),
		emoticon : '7ETR4Dtp8xfPz3M1',
		color : 27,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```