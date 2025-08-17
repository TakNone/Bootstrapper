# chatlists.exportedChatlistInvite

**Description** : *Info about an exported chat folder deep link »*

**Layer** : 211

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
		id : 57,
		title : $client->textWithEntities(
			text : 'etuYjzrPq2JMShCy',
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
		emoticon : '3uA6J4kdEi8f1mhO',
		color : 93,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -6501150595987755398,
			),
			$client->inputPeerUser(
				user_id : -4664653093347984033,
				access_hash : 3898213448284746960,
			),
			$client->inputPeerChannel(
				channel_id : -8467359137819535243,
				access_hash : 444391765002502374,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 14,
				user_id : -3508695222366223485,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 9,
				channel_id : -1283898515099728521,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 5803808764001418128,
			),
			$client->inputPeerUser(
				user_id : 6945653609021014417,
				access_hash : -4150732195708525143,
			),
			$client->inputPeerChannel(
				channel_id : 2812811522470224772,
				access_hash : -8049503110303357211,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 31,
				user_id : 6574119224361941086,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 95,
				channel_id : -7370803602906900036,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 3913875359231254408,
			),
			$client->inputPeerUser(
				user_id : 2066624778594362842,
				access_hash : -3599275532397248614,
			),
			$client->inputPeerChannel(
				channel_id : 7544884983152401569,
				access_hash : -5424682474202420092,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 34,
				user_id : 6879919364479532134,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 30,
				channel_id : 3225328196288478335,
			),
		),
	),
	invite : $client->exportedChatlistInvite(
		title : '6WKFm1eaXdQuEb5T',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : 1485949863891977009,
			),
			$client->peerChat(
				chat_id : -6559687558226750575,
			),
			$client->peerChannel(
				channel_id : -8792428557143203651,
			),
		),
	),
);
```