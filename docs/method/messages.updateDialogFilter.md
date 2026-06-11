# messages.updateDialogFilter

**Description** : *Update folder*

**Layer** : 227

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
	id : 63,
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
		id : 56,
		title : $client->textWithEntities(
			text : 'Ahgx7BfJQ5wa8sEn',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 7,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 18,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 26,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 61,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 57,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 78,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 73,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 20,
					language : 'NGSD927V0hEek5w4',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 74,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 24,
					user_id : 6407243679933449266,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 17,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 95,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 73,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 9,
					document_id : 1560424331743562083,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 6,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 42,
					date : 54,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 14,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 46,
					old_text : 'ykElmcTZR9DiBYfu',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 16,
				),
			),
		),
		emoticon : 'JXZpGet1bIAmdQB7',
		color : 43,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```