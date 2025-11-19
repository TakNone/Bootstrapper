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
		id : 58,
		title : $client->textWithEntities(
			text : 'YHPxSsiuqBD6yt3n',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 96,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 23,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 66,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 20,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 94,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 78,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 51,
					language : 'VEXzWeHtwlJsTBno',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 50,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 60,
					user_id : 25957635206893777,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 22,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 33,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 50,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 64,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 57,
					document_id : 7888932796232464881,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 31,
				),
			),
		),
		emoticon : 'eTIBo2nRA0NX9v1D',
		color : 3,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	invite : $client->exportedChatlistInvite(
		revoked : true,
		title : 'TwVb2nBimr4tDMNK',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : 5424704042342962441,
			),
			$client->peerChat(
				chat_id : -6520327094809276134,
			),
			$client->peerChannel(
				channel_id : -8554677426141666776,
			),
		),
	),
);
```