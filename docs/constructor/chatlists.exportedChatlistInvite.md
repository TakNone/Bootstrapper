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
		id : 14,
		title : $client->textWithEntities(
			text : 'v7j2XynYCQPoUhZu',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 39,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 73,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 18,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 67,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 48,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 29,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 6,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 29,
					language : '3bZASReYTjn5CUBu',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 58,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 40,
					user_id : 8476407683060169053,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 28,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 95,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 56,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 21,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 8,
					document_id : 7457840433153560347,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 92,
				),
			),
		),
		emoticon : 'snjtC7eDzLPl6EoT',
		color : 93,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	invite : $client->exportedChatlistInvite(
		revoked : true,
		title : 'RxAKBIqYuJ1md3Pt',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : -4719217849590638856,
			),
			$client->peerChat(
				chat_id : 4830821115715652188,
			),
			$client->peerChannel(
				channel_id : 9218138701013570848,
			),
		),
	),
);
```