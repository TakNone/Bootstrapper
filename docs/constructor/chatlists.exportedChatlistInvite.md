# chatlists.exportedChatlistInvite

**Description** : *Info about an exported chat folder deep link &raquo;*

**Layer** : 218

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
		id : 11,
		title : $client->textWithEntities(
			text : 'w5I0v4fy8xNWDXKG',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 39,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 82,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 23,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 25,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 1,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 74,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 40,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 30,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 100,
					language : 'W8S1DK6LYhsRFbvE',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 69,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 27,
					user_id : 1346482496861901383,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 52,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 50,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 45,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 82,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 19,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 37,
					document_id : -5525428709280727100,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 20,
				),
			),
		),
		emoticon : 'oWGQK9BmJTOYLe0M',
		color : 29,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	invite : $client->exportedChatlistInvite(
		revoked : true,
		title : '80tsX2fo1dalJC6Q',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : 6959552717565195059,
			),
			$client->peerChat(
				chat_id : -2460635680837503544,
			),
			$client->peerChannel(
				channel_id : -8917177924698784667,
			),
		),
	),
);
```