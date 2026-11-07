# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 229

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
		id : 55,
		title : $client->textWithEntities(
			text : 'cKRoSwY1ArzkCJT0',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 32,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 57,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 93,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 66,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 99,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 27,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 80,
					language : '8rAiFMmtuL62Ea3I',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 12,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 68,
					user_id : -4831460319090773407,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 33,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 19,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 48,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 45,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 25,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 61,
					document_id : -9063486864665202103,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 49,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 6,
					date : 13,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 38,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 0,
					old_text : '6XYb84VZBOWM1HhF',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 72,
				),
			),
		),
		emoticon : 'nk4xAElrXVdThDJL',
		color : 67,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	description : 'Nv1xO07tr8yYoIfi',
);
```