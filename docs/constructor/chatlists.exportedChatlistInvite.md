# chatlists.exportedChatlistInvite

**Description** : *Info about an exported chat folder deep link &raquo;*

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
		id : 3,
		title : $client->textWithEntities(
			text : 'mEiHscO9x84ulNUJ',
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
		emoticon : 'ikqC0BFNzKraXdUW',
		color : 98,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -5891394809679190009,
			),
			$client->inputPeerUser(
				user_id : 1529888439770051263,
				access_hash : -8058337691811232649,
			),
			$client->inputPeerChannel(
				channel_id : 613645382595767841,
				access_hash : 6094908985383532333,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 82,
				user_id : -1557173074881839259,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 30,
				channel_id : 8101316235074317696,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -463631829939424537,
			),
			$client->inputPeerUser(
				user_id : 1511872205615886183,
				access_hash : -2092750223845184283,
			),
			$client->inputPeerChannel(
				channel_id : -9137272838259064282,
				access_hash : 5652809244926214249,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 41,
				user_id : -5833518789774827123,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 74,
				channel_id : 266642851171789681,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -5803843741964508357,
			),
			$client->inputPeerUser(
				user_id : -9188222912311789559,
				access_hash : 5733936443445934160,
			),
			$client->inputPeerChannel(
				channel_id : -8921706125417888983,
				access_hash : 6960944903825037802,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 60,
				user_id : -7511943380451687579,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 60,
				channel_id : 3060626157062227785,
			),
		),
	),
	invite : $client->exportedChatlistInvite(
		title : 'uFdc1YQZy0MeDICv',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : 3903293780590969345,
			),
			$client->peerChat(
				chat_id : -1552131744415728830,
			),
			$client->peerChannel(
				channel_id : -506332885459060849,
			),
		),
	),
);
```