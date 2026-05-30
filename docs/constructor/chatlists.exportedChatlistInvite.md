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
		id : 57,
		title : $client->textWithEntities(
			text : 'fg4Lia9PsQzwmDkM',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 1,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 86,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 36,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 49,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 37,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 24,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 18,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 46,
					language : 'FyhYZ0VrqIwM8pit',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 6,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 57,
					user_id : 7881128489568732129,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 18,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 28,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 95,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 50,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 26,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 42,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 23,
					document_id : 4918843132728667707,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 89,
				),
			),
		),
		emoticon : '4ST1B9HjvlruCcAX',
		color : 33,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	invite : $client->exportedChatlistInvite(
		title : 'eNiScPOthEU7DCYT',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : -5032823558120676948,
			),
			$client->peerChat(
				chat_id : 5775940745007888743,
			),
			$client->peerChannel(
				channel_id : 3862066239194384297,
			),
		),
	),
);
```