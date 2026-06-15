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
	id : 38,
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
		id : 18,
		title : $client->textWithEntities(
			text : 'BPme7pjXS9rZHNxO',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 86,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 54,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 99,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 0,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 24,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 88,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 63,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 48,
					language : 'pKIrO9TDYux6i7ek',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 61,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 55,
					user_id : -5224674924329254058,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 50,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 28,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 2,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 74,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 60,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 69,
					document_id : 1581327126773900173,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 99,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 7,
					date : 56,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 86,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 85,
					old_text : 'v5IVRmeT6DK03aOi',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 85,
				),
			),
		),
		emoticon : '45pZSRkq6D8LVv2T',
		color : 54,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```