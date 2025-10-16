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
		id : 90,
		title : $client->textWithEntities(
			text : 'gsYIn6DLvGhaj2yC',
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
		emoticon : 'byzIdP5lvHTgJ3h6',
		color : 80,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 2771866868592309437,
			),
			$client->inputPeerUser(
				user_id : 5751983087230334919,
				access_hash : -8281611759768344566,
			),
			$client->inputPeerChannel(
				channel_id : -4880744379245457427,
				access_hash : -1087153115496778208,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 28,
				user_id : -3842486599057624990,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 41,
				channel_id : 1003163389135299791,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -7529057551778143933,
			),
			$client->inputPeerUser(
				user_id : -1871790299333739607,
				access_hash : -6147684900878450260,
			),
			$client->inputPeerChannel(
				channel_id : -7694391229145381285,
				access_hash : 6465887531639849600,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 88,
				user_id : 777480145207558562,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 47,
				channel_id : 952982820207358646,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -3644666631233818132,
			),
			$client->inputPeerUser(
				user_id : -3857127324952816574,
				access_hash : -4934071201315532396,
			),
			$client->inputPeerChannel(
				channel_id : -77484397793602109,
				access_hash : -6033805228064129219,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 49,
				user_id : -4535030154088668199,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 73,
				channel_id : 6274465563560199215,
			),
		),
	),
	invite : $client->exportedChatlistInvite(
		revoked : true,
		title : 'js0o5gLXp8fQF91R',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : -7928704617875103913,
			),
			$client->peerChat(
				chat_id : -5404842562069897296,
			),
			$client->peerChannel(
				channel_id : 2290085948538337853,
			),
		),
	),
);
```