# chatlists.exportedChatlistInvite

**Description** : *Info about an exported chat folder deep link &raquo;*

**Layer** : 227

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
		id : 25,
		title : $client->textWithEntities(
			text : 'wIKtxiOmj5LD9TYf',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 51,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 94,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 35,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 0,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 80,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 19,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 3,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 30,
					language : 'PMaH1zfv8eV6NuBn',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 88,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : -4185991874939818221,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 43,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 61,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 86,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 32,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 49,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 16,
					document_id : -6390815160349618159,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 96,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 59,
					date : 24,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 41,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 62,
					old_text : 'VnqzfReG3DHaQY08',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 14,
				),
			),
		),
		emoticon : '3bNprGAHF4LeqtuJ',
		color : 17,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	invite : $client->exportedChatlistInvite(
		title : '4tKIxbqzn0pQ7w3l',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : -99505569531734977,
			),
			$client->peerChat(
				chat_id : 3156333110678214014,
			),
			$client->peerChannel(
				channel_id : 3290656227918688799,
			),
		),
	),
);
```