# messages.updateDialogFilter

**Description** : *Update folder*

**Layer** : 216

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
	id : 81,
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
		id : 81,
		title : $client->textWithEntities(
			text : '2l5NABGoh81DIVya',
			entities : array(
				$client->messageEntityUnknown(...),
				$client->messageEntityMention(...),
				$client->messageEntityHashtag(...),
				$client->messageEntityBotCommand(...),
				$client->messageEntityUrl(...),
				$client->messageEntityEmail(...),
				$client->messageEntityBold(...),
				$client->messageEntityItalic(...),
				$client->messageEntityCode(...),
				$client->messageEntityPre(...),
				$client->messageEntityTextUrl(...),
				$client->messageEntityMentionName(...),
				$client->inputMessageEntityMentionName(...),
				$client->messageEntityPhone(...),
				$client->messageEntityCashtag(...),
				$client->messageEntityUnderline(...),
				$client->messageEntityStrike(...),
				$client->messageEntityBankCard(...),
				$client->messageEntitySpoiler(...),
				$client->messageEntityCustomEmoji(...),
				$client->messageEntityBlockquote(...),
			),
		),
		emoticon : 'ipEh6dfTPHsnLgbk',
		color : 0,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -428528749866861795,
			),
			$client->inputPeerUser(
				user_id : 1598668922547271766,
				access_hash : 1536472457752295973,
			),
			$client->inputPeerChannel(
				channel_id : -99199927150324464,
				access_hash : 3925148707540246388,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 38,
				user_id : -4692995502468841834,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 96,
				channel_id : -3395753503814754611,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 1594352659439995508,
			),
			$client->inputPeerUser(
				user_id : -3678448474843788934,
				access_hash : -4740365572579000357,
			),
			$client->inputPeerChannel(
				channel_id : 3897976711072996516,
				access_hash : -6512554970862283872,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 9,
				user_id : -5246377992685335743,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 57,
				channel_id : -724714038510505090,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 3201842348557736032,
			),
			$client->inputPeerUser(
				user_id : -4651999593508391366,
				access_hash : -2582131787332022068,
			),
			$client->inputPeerChannel(
				channel_id : 173833612614596483,
				access_hash : 6110052902255291982,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 88,
				user_id : 8032707234851854308,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 14,
				channel_id : 2225688854755025721,
			),
		),
	),
);
```