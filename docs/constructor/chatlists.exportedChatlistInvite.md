# chatlists.exportedChatlistInvite

**Description** : *Info about an exported chat folder deep link &raquo;*

**Layer** : 233

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
		id : 24,
		title : $client->textWithEntities(
			text : 'PDeM45p6jgUoYG8L',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 61,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 51,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 23,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 26,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 50,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 79,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 57,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 4,
					language : 'QxWOt9FDCbK8v0kG',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 51,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 48,
					user_id : -6062450689783939024,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 96,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 30,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 72,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 76,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 35,
					document_id : -6410323803818786515,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 95,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 89,
					date : 71,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 71,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 34,
					old_text : 'TwBl4uhgWFiQMzeE',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 44,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 3,
				),
			),
		),
		emoticon : 'IkVJlGmbQd4qo7F2',
		color : 23,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	invite : $client->exportedChatlistInvite(
		title : 'pCAmtjMhoZTNJqLl',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : 7241773405115704038,
			),
			$client->peerChat(
				chat_id : -1992459162798618900,
			),
			$client->peerChannel(
				channel_id : -479221270544550301,
			),
		),
	),
);
```