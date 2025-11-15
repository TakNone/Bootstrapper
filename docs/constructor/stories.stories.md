# stories.stories

**Description** : *List of stories*

**Layer** : 218

```tl
stories.stories#63c3dd0a flags:# count:int stories:Vector<StoryItem> pinned_to_top:flags.0?Vector<int> chats:Vector<Chat> users:Vector<User> = stories.Stories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of stories that can be fetched |
| <mark>stories</mark> | [`Vector<StoryItem>`](type/StoryItem) | Stories |
| **pinned_to_top** | [`flags.0?Vector<int>`](type/int) | IDs of pinned stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.Stories](type/stories.Stories)

---

## Example

```php
$storiesStories = $client->stories->stories(
	count : 89,
	stories : array(
		$client->storyItemDeleted(
			id : 15,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 75,
			date : 0,
			expire_date : 38,
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
			id : 73,
			date : 96,
			from_id : $client->peerUser(
				user_id : 7345265960066870334,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : -5985309089944294564,
				),
				from_name : 'sIE4qatfHQZb52Yd',
				story_id : 1,
			),
			expire_date : 64,
			caption : '82HKN39Y7pItOFxA',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 40,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 97,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 32,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 78,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 53,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 53,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 78,
					language : 'cBa2zDGd5Mhljbvs',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 41,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : -1491705257164380259,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 10,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 40,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 52,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 88,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 0,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 81,
					document_id : 5256671189123730276,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 55,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 298022.9912109375,
						y : -637961.13671875,
						w : 1597519.095703125,
						h : 473720.787109375,
						rotation : -1438349.3798828125,
						radius : -1106881.5537109375,
					),
					geo : $client->geoPointEmpty(),
					title : 'ri8eDqAs5HUwvdSh',
					address : 'brwf2Ppt7KlxjzsC',
					provider : 'rc0hnpHOFD2qMIWa',
					venue_id : 'ad0X6WEgObVi5spq',
					venue_type : '2EbJh6Rk0lQxgPrS',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 860619.6728515625,
						y : -198038.2734375,
						w : 1388254.4951171875,
						h : 347345.30078125,
						rotation : -1771618.40625,
						radius : 725156.9150390625,
					),
					query_id : -9136636448810261877,
					result_id : 'OsFEokx78u4tiSeM',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : 1437089.2958984375,
						y : -1853224.3916015625,
						w : 1037641.21484375,
						h : -237321.9208984375,
						rotation : 503952.4365234375,
						radius : -743013.7197265625,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'vLfVrWex9bcs3yhg',
						state : 'Wa7fTK9mqZb16Yyh',
						city : 'z0m9xD3kWnSXpKYg',
						street : 'mBD8LREpt1rwNcnf',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : 1944960.146484375,
						y : 1860940.2001953125,
						w : 1206050.482421875,
						h : 1155627.2275390625,
						rotation : -418328.21484375,
						radius : -729585.1611328125,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : -1646482.306640625,
						y : 319636.0966796875,
						w : -1905381.501953125,
						h : -1989261.34375,
						rotation : -2091496.5263671875,
						radius : 191593.765625,
					),
					channel_id : 1631167376088219834,
					msg_id : 88,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 525858.720703125,
						y : 1866786.1318359375,
						w : 1024062.1044921875,
						h : -1403109.935546875,
						rotation : 1995973.8544921875,
						radius : -1374296.970703125,
					),
					channel : $client->get_input_channel(peer : '@LiveProto'),
					msg_id : 79,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : -87634.9306640625,
						y : 541547.4130859375,
						w : 1929570.7060546875,
						h : -1255746.91796875,
						rotation : -1834667.3974609375,
						radius : 793289.580078125,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : -1766304.09375,
						y : -1654108.404296875,
						w : -831611.0654296875,
						h : -2069592.845703125,
						rotation : 1750128.3203125,
						radius : -1948644.453125,
					),
					emoji : 'Ezy2tSuXAKQr3Ggf',
					temperature_c : 484304.833984375,
					color : 10,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : -508892.201171875,
						y : 107663.60546875,
						w : 1054785.87890625,
						h : -1584624.115234375,
						rotation : -1001590.87109375,
						radius : -937436.1591796875,
					),
					slug : 'aDesAgyQ197tqrpz',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(2066930347079332547),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-4899630807410271179),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-870852619078954398),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(960509109553123510),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 72,
				forwards_count : 26,
				reactions : array(
					$client->reactionCount(
						chosen_order : 31,
						reaction : $client->reactionEmpty(...),
						count : 0,
					),
				),
				reactions_count : 52,
				recent_viewers : array(7057356554720209630),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(48),
		),
	),
	pinned_to_top : array(85),
	chats : array(
		$client->chatEmpty(
			id : 3388321330536573875,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 212302161308584262,
			title : 'Jv0ISXWcQEzpmL4f',
			photo : $client->chatPhotoEmpty(),
			participants_count : 80,
			date : 56,
			version : 97,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 15,
			),
		),
		$client->chatForbidden(
			id : -4554224053401245363,
			title : 'NOzC4pb5YhIQXoEA',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -6786876740792198536,
			access_hash : -700070452072144955,
			title : 'BS6vj9bLGWiUKsHJ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 22,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'sNIocKA7p3C0OEFx',
					reason : 'w8a9QpOo4MXUJhj7',
					text : 'ZomkGsd046TIflic',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 34,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 18,
			),
			participants_count : 94,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 90,
			),
			color : $client->peerColor(
				color : 80,
				background_emoji_id : 9183249567134355200,
			),
			profile_color : $client->peerColor(
				color : 73,
				background_emoji_id : -3452537679717836329,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 54,
			subscription_until_date : 29,
			bot_verification_icon : 3490772821115222489,
			send_paid_messages_stars : -2770003539371829898,
			linked_monoforum_id : -7178369509623326511,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2619008305080622301,
			access_hash : -9047947688005009152,
			title : 'iFeSD5wvQ2lsyKz7',
			until_date : 23,
		),
	),
	users : array(
		$client->userEmpty(
			id : 952025178378862192,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : 783551881866911657,
			access_hash : -5978837553378177553,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'OMaKH5JjPpQGWzVI',
					reason : '84GKTziudVhCfPFL',
					text : '8ne42Fh0r6opyEmY',
				),
			),
			bot_inline_placeholder : 'nptN8mycsxd6fI3K',
			lang_code : 'WoPj6hNaEHmzpqCv',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 100,
			),
			color : $client->peerColor(
				color : 41,
				background_emoji_id : 1811960775437066029,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : -420868270304720512,
			),
			bot_active_users : 95,
			bot_verification_icon : -7349453984827287116,
			send_paid_messages_stars : 8389224262497120448,
		),
	),
);
```