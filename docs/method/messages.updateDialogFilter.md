# messages.updateDialogFilter

**Description** : *Update folder*

**Layer** : 229

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
	id : 91,
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
		id : 68,
		title : $client->textWithEntities(
			text : 'VkYUwNadHTy87QuM',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 97,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 31,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 46,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 78,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 17,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 42,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 87,
					language : 'kElj0GhA3L462xsD',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 73,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 68,
					user_id : -2625431668363844319,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 24,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 58,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 45,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 4,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 71,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 93,
					document_id : -5098394987074379598,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 94,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 86,
					date : 71,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 67,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 34,
					old_text : 'ytgwXuWQBEVZYD7j',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 13,
				),
			),
		),
		emoticon : 'kAvbUdIpiP6uoVmW',
		color : 24,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```