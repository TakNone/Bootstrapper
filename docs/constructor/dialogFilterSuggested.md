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
		id : 47,
		title : $client->textWithEntities(
			text : 'qOJozDhZrSuMQ6iU',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 26,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 59,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 5,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 66,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 87,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 91,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 41,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 65,
					language : 'Ta7GfV1509tcgSb8',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 51,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : -5750525662199147014,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 36,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 90,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 44,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 76,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 4,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 39,
					document_id : 1068409193548762148,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 97,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 67,
					date : 1,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 38,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 29,
					old_text : '3fJFwXt9qYv4uGdj',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 44,
				),
			),
		),
		emoticon : 'QXTAPH85f7ut3z1v',
		color : 7,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	description : 'IadzuSTmhNtiwEkn',
);
```