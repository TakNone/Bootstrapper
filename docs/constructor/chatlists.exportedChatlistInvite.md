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
		id : 46,
		title : $client->textWithEntities(
			text : 'xkyizajM29OcY6n3',
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
		emoticon : 'DxZR0OBtLPgnfh1J',
		color : 81,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 5996310650921969530,
			),
			$client->inputPeerUser(
				user_id : 408851502881661487,
				access_hash : -7212269614044288634,
			),
			$client->inputPeerChannel(
				channel_id : 9034170574853732399,
				access_hash : -1647342085051364930,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 72,
				user_id : 4614981452050461627,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 48,
				channel_id : 1174311084244406982,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -8535090772079628473,
			),
			$client->inputPeerUser(
				user_id : 7172468886183401323,
				access_hash : -8823701254651161665,
			),
			$client->inputPeerChannel(
				channel_id : 3942234337461389126,
				access_hash : 4192515516954048587,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 46,
				user_id : 2851193001904250629,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 71,
				channel_id : 1761862818504879337,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -4319656368182681314,
			),
			$client->inputPeerUser(
				user_id : 4173791392485009912,
				access_hash : -4027737579314267003,
			),
			$client->inputPeerChannel(
				channel_id : -260227033018940409,
				access_hash : 1341168217894371426,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 23,
				user_id : 3909970983120494081,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 60,
				channel_id : 6771605087927859137,
			),
		),
	),
	invite : $client->exportedChatlistInvite(
		revoked : true,
		title : 'dAP6sZeSvkwYGIqT',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : -7618306362373825477,
			),
			$client->peerChat(
				chat_id : 4824255920614205079,
			),
			$client->peerChannel(
				channel_id : -2277119878811402048,
			),
		),
	),
);
```