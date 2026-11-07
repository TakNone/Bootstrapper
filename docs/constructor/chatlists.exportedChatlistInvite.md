# chatlists.exportedChatlistInvite

**Description** : *Info about an exported chat folder deep link &raquo;*

**Layer** : 229

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
		id : 21,
		title : $client->textWithEntities(
			text : '0MqZnao23DJu8mTV',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 15,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 9,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 68,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 53,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 16,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 65,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 70,
					language : 'UYtSd9kiP21xNqjH',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 29,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 95,
					user_id : -5658938423712333465,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 81,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 61,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 88,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 59,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 17,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 45,
					document_id : -9167830926157610629,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 8,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 4,
					date : 27,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 5,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 61,
					old_text : 'e1u7V6BScGX9TRdF',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 29,
				),
			),
		),
		emoticon : 'nli0a364QWeyfbFN',
		color : 93,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	invite : $client->exportedChatlistInvite(
		title : 'ACvotSJy03B79kc5',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : -1292903426272823555,
			),
			$client->peerChat(
				chat_id : -1727542363142003362,
			),
			$client->peerChannel(
				channel_id : 7812282197653796655,
			),
		),
	),
);
```