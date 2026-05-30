# messages.updateDialogFilter

**Description** : *Update folder*

**Layer** : 225

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
	id : 97,
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
		id : 91,
		title : $client->textWithEntities(
			text : 'K3VP7QBetUCjq1aH',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 68,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 100,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 63,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 48,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 20,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 32,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 13,
					language : '7zTYSwuUxyMBf6Q4',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 35,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 57,
					user_id : 1236544569382533888,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 68,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 62,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 58,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 37,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 12,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 81,
					document_id : 8748102339031633581,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 96,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 76,
					date : 66,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 24,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 25,
					old_text : 'WzMFnupqHN7Xk0gh',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 57,
				),
			),
		),
		emoticon : 'YtOguaFDpfMCvP43',
		color : 17,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```