# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 233

```tl
messages.dialogFilters#2ad93719 flags:# tags_enabled:flags.0?true filters:Vector<DialogFilter> = messages.DialogFilters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **tags_enabled** | [`flags.0?true`](type/true) | Whether folder tags are enabled |
| <mark>filters</mark> | [`Vector<DialogFilter>`](type/DialogFilter) | Folders |

---

## Type

[messages.DialogFilters](type/messages.DialogFilters)

---

## Example

```php
$messagesDialogFilters = $client->messages->dialogFilters(
	tags_enabled : true,
	filters : array(
		$client->dialogFilter(
			contacts : true,
			non_contacts : true,
			groups : true,
			broadcasts : true,
			bots : true,
			exclude_muted : true,
			exclude_read : true,
			exclude_archived : true,
			title_noanimate : true,
			id : 40,
			title : $client->textWithEntities(
				text : 'LbXd4hBKy3TqHN2G',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 77,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 1,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 50,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 61,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 39,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 69,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 27,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 50,
						language : 'xBQfyZ8KL41Rz3hu',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 81,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 73,
						user_id : 8851815159727421829,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 78,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 81,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 33,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 87,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 3,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 72,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 21,
						document_id : 5260202922248658028,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 93,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 36,
						date : 47,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 83,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 10,
						old_text : '1lZAwQqUOrva8DcG',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 70,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 93,
					),
				),
			),
			emoticon : 'MvHr4e61cFoiy8NI',
			color : 37,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 68,
			title : $client->textWithEntities(
				text : 'u5IlbsWMYUa0Sy8G',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 7,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 62,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 95,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 91,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 82,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 97,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 36,
						language : 'iFjIWuV8qbfwgsJA',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 69,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 41,
						user_id : 9144440370803396050,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 87,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 90,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 43,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 10,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 42,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 82,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 86,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 38,
						document_id : 7683592904919360129,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 14,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 52,
						date : 14,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 85,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 14,
						old_text : 'ztNLHG0mVwEFA2CO',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 55,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 96,
					),
				),
			),
			emoticon : 'h9I3ORPV40KyQ6gS',
			color : 79,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
	),
);
```