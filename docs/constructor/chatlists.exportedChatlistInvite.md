# chatlists.exportedChatlistInvite

**Description** : *Info about an exported chat folder deep link &raquo;*

**Layer** : 225

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
			text : 'mV25xeqNQ4Lg9UPb',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 76,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 99,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 43,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 33,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 18,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 35,
					language : 'IHfOX1sMyc4QpTvE',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 12,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 20,
					user_id : 797456681482979170,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 77,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 20,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 51,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 62,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 99,
					document_id : 8120488702832976010,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 99,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 49,
					date : 90,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 34,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 24,
					old_text : 'NP3nuXa8lJQHETc0',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 52,
				),
			),
		),
		emoticon : 'k37OcVlP68EKX0qg',
		color : 0,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	invite : $client->exportedChatlistInvite(
		title : 'rG4icvAuNolOZdea',
		url : 'https://docs.liveproto.dev',
		peers : array(
			$client->peerUser(
				user_id : -2458561380774900734,
			),
			$client->peerChat(
				chat_id : 6547991645978642429,
			),
			$client->peerChannel(
				channel_id : 7184889408548141401,
			),
		),
	),
);
```