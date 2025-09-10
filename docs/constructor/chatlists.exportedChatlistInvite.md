# chatlists.exportedChatlistInvite

**Description** : *Info about an exported chat folder deep link &raquo;*

**Layer** : 214

```tl
chatlists.exportedChatlistInvite#10e6e3a6 filter:DialogFilter invite:ExportedChatlistInvite = chatlists.ExportedChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter</mark> | [`DialogFilter`](type/DialogFilter) | Folder ID |
| <mark>invite</mark> | [`ExportedChatlistInvite`](type/ExportedChatlistInvite) | The exported chat folder deep link » |

---

## Type

[chatlists.ExportedChatlistInvite](type/chatlists.ExportedChatlistInvite)

---

## Example

```php
$chatlistsExportedChatlistInvite = $client->chatlists->exportedChatlistInvite(
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
		id : 96,
		title : $client->textWithEntities(
			text : '14A5S8BU7vhnd9ib',
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
		emoticon : 'FTqsV8p1vGMjw9Q4',
		color : 16,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -3102997154368520898,
			),
			$client->inputPeerUser(
				user_id : 2006490798572874723,
				access_hash : 6766211898958090962,
			),
			$client->inputPeerChannel(
				channel_id : -7654965062372022475,
				access_hash : -4552025314861704750,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 78,
				user_id : -6240404636358993958,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 54,
				channel_id : 8026185822167528563,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -3844867697642143328,
			),
			$client->inputPeerUser(
				user_id : -8399745564823593797,
				access_hash : -2356427080185685482,
			),
			$client->inputPeerChannel(
				channel_id : 524023874670732949,
				access_hash : 6795757678538573680,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 62,
				user_id : -5379421512146116788,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 95,
				channel_id : 4227572121848694887,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -1662038074863823263,
			),
			$client->inputPeerUser(
				user_id : 2229546334566276838,
				access_hash : 4526321940637353662,
			),
			$client->inputPeerChannel(
				channel_id : 7623467469033153390,
				access_hash : 6366297937252723711,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 86,
				user_id : 7810732286175949462,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 87,
				channel_id : -3482376546858175245,
			),
		),
	),
	invite : $client->exportedChatlistInvite(
		revoked : true,
		title : 'lsnrUTgIpeYxuW2A',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : -8210295574881354360,
			),
			$client->peerChat(
				chat_id : 194140211940056281,
			),
			$client->peerChannel(
				channel_id : 5633314566884048966,
			),
		),
	),
);
```