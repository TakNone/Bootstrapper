# chatlists.exportedChatlistInvite

**Description** : *Info about an exported chat folder deep link &raquo;*

**Layer** : 222

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
		id : 92,
		title : $client->textWithEntities(
			text : 'uRo5daV0PkqLZ8Em',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 16,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 75,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 4,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 6,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 46,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 81,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 16,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 65,
					language : 'RlBO2VrNL5UJ9hxs',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 4,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 41,
					user_id : 7755645833707932415,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 49,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 18,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 72,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 62,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 19,
					document_id : -489827835438232103,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 76,
				),
			),
		),
		emoticon : 'xBLy3GDv5EuHdPr4',
		color : 55,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	invite : $client->exportedChatlistInvite(
		title : 'QDCxZ8U1E3ioKPmO',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : 128124562064543515,
			),
			$client->peerChat(
				chat_id : -790178392463973469,
			),
			$client->peerChannel(
				channel_id : -8066908053644337195,
			),
		),
	),
);
```