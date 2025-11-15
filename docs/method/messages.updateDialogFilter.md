# messages.updateDialogFilter

**Description** : *Update folder*

**Layer** : 218

```tl
messages.updateDialogFilter#1ad4a04a flags:# id:int filter:flags.0?DialogFilter = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 90,
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
		id : 36,
		title : $client->textWithEntities(
			text : '54Vwj07L8xONviCI',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 1,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 20,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 58,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 60,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 34,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 9,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 21,
					language : 'S0rhMBGjopPFDXCq',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 17,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : 6922938993786386032,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 26,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 9,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 47,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 81,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 10,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 98,
					document_id : -7208318751687703693,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 17,
				),
			),
		),
		emoticon : 'GVQW20MxTLErJPkz',
		color : 53,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```