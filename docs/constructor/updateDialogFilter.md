# updateDialogFilter

**Description** : *A new folder was added*

**Layer** : 216

```tl
updateDialogFilter#26ffde7d flags:# id:int filter:flags.0?DialogFilter = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`int`](type/int) | Folder ID |
| **filter** | [`flags.0?DialogFilter`](type/DialogFilter) | Folder info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDialogFilter(
	id : 33,
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
			text : 'Ud1cX3CDs9iF8NKr',
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
		emoticon : '23B6EsFiJYV87IL4',
		color : 58,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 7226113805284232024,
			),
			$client->inputPeerUser(
				user_id : -8478102089034778887,
				access_hash : -2610695793997047580,
			),
			$client->inputPeerChannel(
				channel_id : 1990264290812847550,
				access_hash : -5338165855525375463,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 23,
				user_id : -755915961741545738,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 31,
				channel_id : 6382469868757873847,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 7219217557185933996,
			),
			$client->inputPeerUser(
				user_id : -5084236241496620300,
				access_hash : -1893801649416920765,
			),
			$client->inputPeerChannel(
				channel_id : 6378409288652670926,
				access_hash : 1955664805902810797,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 61,
				user_id : 7836869212957448393,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 43,
				channel_id : 1534408224453728509,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -2024966890126816191,
			),
			$client->inputPeerUser(
				user_id : -1796477751125731969,
				access_hash : 1264911480244326695,
			),
			$client->inputPeerChannel(
				channel_id : 5048483254065765265,
				access_hash : 1611134529109972265,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 89,
				user_id : 2146427301402832097,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 6,
				channel_id : 5685324237778574061,
			),
		),
	),
);
```