# chatlists.exportedChatlistInvite

**Description** : *Info about an exported chat folder deep link &raquo;*

**Layer** : 216

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
		id : 93,
		title : $client->textWithEntities(
			text : 'KG3Oz1mbfJ0dPgCj',
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
		emoticon : 'JkK0LhXFEM7ZQz8m',
		color : 25,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -6788750871721805893,
			),
			$client->inputPeerUser(
				user_id : -1508381342833815924,
				access_hash : 1794366314185706579,
			),
			$client->inputPeerChannel(
				channel_id : -382960303833951730,
				access_hash : -3454916762979594171,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 87,
				user_id : 64613461108259782,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 60,
				channel_id : 2323692671585944961,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 1235125786144803475,
			),
			$client->inputPeerUser(
				user_id : 7607513327695915631,
				access_hash : -5147892537812219894,
			),
			$client->inputPeerChannel(
				channel_id : -1264192687597393141,
				access_hash : -368177462986660425,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 28,
				user_id : 3925619736288418007,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 73,
				channel_id : -6067298963620294825,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -5425479385349136952,
			),
			$client->inputPeerUser(
				user_id : 7069748755680276338,
				access_hash : 6032399163208767113,
			),
			$client->inputPeerChannel(
				channel_id : 8661931768508952404,
				access_hash : -606373484413945219,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 83,
				user_id : 2281736958044088858,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 65,
				channel_id : 4265077129764524992,
			),
		),
	),
	invite : $client->exportedChatlistInvite(
		revoked : true,
		title : '3lDH56rtTauNwmRF',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : 8851651021312943000,
			),
			$client->peerChat(
				chat_id : -236580386849935559,
			),
			$client->peerChannel(
				channel_id : -8749773854921752781,
			),
		),
	),
);
```