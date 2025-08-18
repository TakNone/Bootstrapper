# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 211

```tl
peerStories#9a35e999 flags:# peer:Peer max_read_id:flags.0?int stories:Vector<StoryItem> = PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| **max_read_id** | [`flags.0?int`](type/int) | If set, contains the ID of the maximum read story |
| <mark>stories</mark> | [`Vector<StoryItem>`](type/StoryItem) | Stories |

---

## Type

[PeerStories](type/PeerStories)

---

## Example

```php
$peerStories = $client->peerStories(
	peer : $client->peerUser(
		user_id : -821745970170151230,
	),
	max_read_id : 51,
	stories : array(
		$client->storyItemDeleted(
			id : 93,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 44,
			date : 8,
			expire_date : 86,
		),
		$client->storyItem(
			pinned : true,
			public : true,
			close_friends : true,
			min : true,
			noforwards : true,
			edited : true,
			contacts : true,
			selected_contacts : true,
			out : true,
			id : 34,
			date : 41,
			from_id : $client->peerUser(
				user_id : 3004352431957345191,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : 'oAJ1xOejDn936QUc',
				story_id : 66,
			),
			expire_date : 51,
			caption : 'TGfHSZVOD5Q8AFWJ',
			entities : array(
				$client->messageEntityUnknown(
					offset : 80,
					length : 37,
				),
				$client->messageEntityMention(
					offset : 70,
					length : 89,
				),
				$client->messageEntityHashtag(
					offset : 81,
					length : 19,
				),
				$client->messageEntityBotCommand(
					offset : 51,
					length : 7,
				),
				$client->messageEntityUrl(
					offset : 88,
					length : 68,
				),
				$client->messageEntityEmail(
					offset : 16,
					length : 92,
				),
				$client->messageEntityBold(
					offset : 96,
					length : 80,
				),
				$client->messageEntityItalic(
					offset : 38,
					length : 99,
				),
				$client->messageEntityCode(
					offset : 29,
					length : 72,
				),
				$client->messageEntityPre(
					offset : 34,
					length : 50,
					language : 'K5tTRXew6br8qhDN',
				),
				$client->messageEntityTextUrl(
					offset : 100,
					length : 4,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 59,
					length : 21,
					user_id : 8105869520191409572,
				),
				$client->inputMessageEntityMentionName(
					offset : 73,
					length : 22,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 31,
					length : 44,
				),
				$client->messageEntityCashtag(
					offset : 96,
					length : 39,
				),
				$client->messageEntityUnderline(
					offset : 78,
					length : 73,
				),
				$client->messageEntityStrike(
					offset : 18,
					length : 98,
				),
				$client->messageEntityBankCard(
					offset : 79,
					length : 92,
				),
				$client->messageEntitySpoiler(
					offset : 100,
					length : 32,
				),
				$client->messageEntityCustomEmoji(
					offset : 75,
					length : 33,
					document_id : 536276902867542826,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 56,
					length : 14,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'a2WKOZp4uQ0HtYCk',
					address : 'TJR69ZePihdfbVN0',
					provider : 'AcsQfomaUJXMlWIt',
					venue_id : 'dZ78QKtT3p9D2bLF',
					venue_type : 'Q7egxdDC2RKoEUlA',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : -8325816480821349812,
					result_id : 'zDgE1lskSOm7PXey',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					address : $client->geoPointAddress(...),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(...),
					reaction : $client->reactionEmpty(...),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel_id : -897277719003711047,
					msg_id : 86,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 66,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : 'jEQIgNtUp5ea3mFG',
					temperature_c : -6775.1201171875,
					color : 58,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : '9K8WayiYxg2j5d3b',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-1370061308325394506),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-8764115199370838344),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-765370137441351102),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(8448503375783645988),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 99,
				forwards_count : 25,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 43,
				recent_viewers : array(-2994019863169895220),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(19),
		),
	),
);
```