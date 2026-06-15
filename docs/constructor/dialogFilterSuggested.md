# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 227

```tl
dialogFilterSuggested#77744d4a filter:DialogFilter description:string = DialogFilterSuggested;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter</mark> | [`DialogFilter`](type/DialogFilter) | Folder info |
| <mark>description</mark> | [`string`](type/string) | Folder description |

---

## Type

[DialogFilterSuggested](type/DialogFilterSuggested)

---

## Example

```php
$dialogFilterSuggested = $client->dialogFilterSuggested(
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
		id : 43,
		title : $client->textWithEntities(
			text : 'WRUkjgcVozmDyKB3',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 36,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 53,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 91,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 14,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 52,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 26,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 65,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 86,
					language : 'TvVBabEkyeuLfS2K',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 27,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 54,
					user_id : -4313755007520830595,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 56,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 38,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 71,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 63,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 32,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 23,
					document_id : -3781343398116825546,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 81,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 42,
					date : 57,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 28,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 25,
					old_text : 'HZjdpqO9CWnb6Glg',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 8,
				),
			),
		),
		emoticon : 'otprknKvHFlCwjBq',
		color : 57,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	description : 'Q65OzhAk79TBxsLG',
);
```