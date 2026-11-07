# messages.updateDialogFilter

**Description** : *Update folder*

**Layer** : 233

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
	id : 34,
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
		id : 50,
		title : $client->textWithEntities(
			text : 'Ct7syMc9WdNnEJGT',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 96,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 29,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 99,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 7,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 43,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 61,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 93,
					language : 'q1oHlWyVIrXjfemi',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 60,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 28,
					user_id : -838460619217826099,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 21,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 43,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 65,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 21,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 81,
					document_id : -383453110552228835,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 79,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 18,
					date : 59,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 88,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 70,
					old_text : 'b3gvI5Jk8s4qY1Fh',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 70,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 92,
				),
			),
		),
		emoticon : 'zsKLCHFAr9pOWne4',
		color : 94,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```