# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 233

```tl
peerStories#9a35e999 flags:# peer:Peer max_read_id:flags.0?int stories:Vector<StoryItem> = PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : -4501739030508641131,
	),
	max_read_id : 35,
	stories : array(
		$client->storyItemDeleted(
			id : 19,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 4,
			date : 47,
			expire_date : 61,
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
			id : 94,
			date : 19,
			from_id : $client->peerUser(
				user_id : -2464355946132900743,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : -8817852386789185591,
				),
				from_name : '4Ghzo7QI2KjuvMaL',
				story_id : 85,
			),
			expire_date : 59,
			caption : 'C3eAEFBywsH406DX',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 55,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 75,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 45,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 50,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 4,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 40,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 62,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 70,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 2,
					language : 'Cwqho7RV6Zlj21Bx',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 88,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 37,
					user_id : 4493377676186054346,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 76,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 90,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 71,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 28,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 63,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 54,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 42,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 38,
					document_id : 5037741940008112558,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 91,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 16,
					date : 86,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 12,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 45,
					old_text : 'qtC4DyGLIPEv0Fnp',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 71,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 27,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 694665.900390625,
						y : -115057.74609375,
						w : 934666.4423828125,
						h : 1429297.7373046875,
						rotation : 1991813.732421875,
						radius : -947.37109375,
					),
					geo : $client->geoPointEmpty(),
					title : 'ye3DgkCEsVxUcjLp',
					address : 'ivd1eIoOc8LSYDFX',
					provider : 'O4daxpY205lBGFiV',
					venue_id : 'j7R5BTzyaKZUFr0M',
					venue_type : 'yfP9rd1bYRzHNV8g',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -479766.1357421875,
						y : 1245384.9462890625,
						w : -1238871.533203125,
						h : 2091425.1064453125,
						rotation : -2076557.234375,
						radius : 896756.4990234375,
					),
					query_id : -22727396114052208,
					result_id : 'jpHSLUQkeC1nw09a',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : 1333364.9873046875,
						y : -1438179.822265625,
						w : -1380908.708984375,
						h : -873778.8564453125,
						rotation : 2018360.1328125,
						radius : -277986.3330078125,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'E6GQgpJounh5vXHc',
						state : 'X1Y3iBShagLHZypj',
						city : 'gCDb3UfElu7MY0mn',
						street : '2EaVpRL5sXBZxCFN',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : -775124.2890625,
						y : 561128.2216796875,
						w : -296494.939453125,
						h : 389581.4609375,
						rotation : 559469.4306640625,
						radius : 1221282.302734375,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : -1284289.658203125,
						y : -1965124.33203125,
						w : 1693224.6611328125,
						h : 814760.4990234375,
						rotation : 5679.826171875,
						radius : -2060397.1767578125,
					),
					channel_id : 3711689464191655036,
					msg_id : 78,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 986013.3310546875,
						y : -323474.9326171875,
						w : 1114751.5,
						h : -288470.4296875,
						rotation : 771958.50390625,
						radius : -1065748.7041015625,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 66,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : 1046366.185546875,
						y : -349575.86328125,
						w : 52749.8603515625,
						h : -372037.8896484375,
						rotation : 856215.7412109375,
						radius : -340518.8427734375,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : -1958331.7314453125,
						y : -1514241.7109375,
						w : 1918864.3642578125,
						h : 633186.439453125,
						rotation : -275466.068359375,
						radius : -1924620.345703125,
					),
					emoji : 'ksYOvXecWIUnfwDr',
					temperature_c : 1639740.83203125,
					color : 10,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : 896928.9921875,
						y : -1839504.36328125,
						w : 720946.595703125,
						h : 518155.44921875,
						rotation : -1370700.5244140625,
						radius : 579061.0146484375,
					),
					slug : 'EW3fjNLdYnlZtc2b',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-8491072609051818036),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-1545820271752992470),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-3565959618037006212),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-7843136072646807077),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 38,
				forwards_count : 100,
				reactions : array(
					$client->reactionCount(
						chosen_order : 54,
						reaction : $client->reactionEmpty(...),
						count : 30,
					),
				),
				reactions_count : 75,
				recent_viewers : array(3892137177631649309),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(100),
			music : $client->documentEmpty(
				id : -1021714496712456970,
			),
		),
	),
);
```