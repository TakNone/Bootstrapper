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
		id : 3,
		title : $client->textWithEntities(
			text : 'nkFOxXQgeqoCbmaM',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 49,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 16,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 29,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 59,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 78,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 10,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 71,
					language : 'iznbEwhlHm8UjMYt',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 76,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 37,
					user_id : 1108740241356825218,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 44,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 43,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 62,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 50,
					document_id : 3355606382060731405,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 13,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 99,
					date : 0,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 18,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 46,
					old_text : '0MFlAXioZCSUuJ6G',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 55,
				),
			),
		),
		emoticon : 'rV8n2bh0DdHk9MGJ',
		color : 84,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	invite : $client->exportedChatlistInvite(
		title : 'AnIKmSs7z1tCN54v',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : -2878299121759496840,
			),
			$client->peerChat(
				chat_id : -6107085670274209989,
			),
			$client->peerChannel(
				channel_id : -8830565820007131419,
			),
		),
	),
);
```