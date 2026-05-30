# stories.stories

**Description** : *List of stories*

**Layer** : 222

```tl
stories.stories#63c3dd0a flags:# count:int stories:Vector<StoryItem> pinned_to_top:flags.0?Vector<int> chats:Vector<Chat> users:Vector<User> = stories.Stories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 70,
	stories : array(
		$client->storyItemDeleted(
			id : 31,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 62,
			date : 47,
			expire_date : 94,
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
			id : 91,
			date : 3,
			from_id : $client->peerUser(
				user_id : -1172149147379654733,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : 6361142866265180330,
				),
				from_name : 'yV58tR7dsuveO6Mz',
				story_id : 74,
			),
			expire_date : 77,
			caption : 'OiqpKb1NWZtRfmI7',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 75,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 44,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 69,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 2,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 88,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 14,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 53,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 13,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 35,
					language : 'Hi0IumEdla7sKzcX',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 4,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 87,
					user_id : -6963780733251407812,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 32,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 6,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 51,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 11,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 18,
					document_id : -5780589200361376140,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 17,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 1241428.6044921875,
						y : 1943335.603515625,
						w : -584346.3056640625,
						h : 1104148.1103515625,
						rotation : -2064175.498046875,
						radius : 870168.7548828125,
					),
					geo : $client->geoPointEmpty(),
					title : 'mCwY0nGBVUaTouDb',
					address : 'mgIsdfEJyCj6ZDk4',
					provider : 'pqRSMcz2xVCk70u8',
					venue_id : 'shtPkajpE7qzgG4y',
					venue_type : 'jVFuZw4vMb6IoPN0',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 118444.455078125,
						y : 236943.216796875,
						w : 1742073.1708984375,
						h : -441061.580078125,
						rotation : -1930978.7568359375,
						radius : -732756.6748046875,
					),
					query_id : -1666146946070343800,
					result_id : 'qKW2pmYywdSORikv',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : -621363.318359375,
						y : 1254975.6494140625,
						w : 1764991.421875,
						h : -992163.4111328125,
						rotation : 1046570.568359375,
						radius : -424753.4384765625,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'q0F74WvMkAYDdptf',
						state : 'BWnFyL5irQMbhOYZ',
						city : 'TEfxKP0q87Ad3wbe',
						street : 'tdPwyjeR9zHh671m',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : -623093.169921875,
						y : 629733.09765625,
						w : -427299.927734375,
						h : -123833.7939453125,
						rotation : -1479857.287109375,
						radius : 95594.181640625,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 982464.6337890625,
						y : 788374.8896484375,
						w : 175871.109375,
						h : -1885656.216796875,
						rotation : 1389852.060546875,
						radius : -1215385.8173828125,
					),
					channel_id : 206262898854218003,
					msg_id : 6,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 2014539.9130859375,
						y : 2024123.66015625,
						w : 516507.173828125,
						h : 788795.6328125,
						rotation : -898672.6396484375,
						radius : -1345099.658203125,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 44,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : -1815553.0029296875,
						y : 85632.3984375,
						w : 402512.689453125,
						h : 273648.501953125,
						rotation : -613984.2080078125,
						radius : -1861586.5478515625,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : 359353.02734375,
						y : 1331827.4033203125,
						w : 952825.9677734375,
						h : -2961.8359375,
						rotation : 1278128.1865234375,
						radius : 1441403.1875,
					),
					emoji : 'S1BaTWP6J9yEpGUC',
					temperature_c : 1584945.0205078125,
					color : 57,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : -1621880.1201171875,
						y : -811009.615234375,
						w : -1318888.9560546875,
						h : 371637.2490234375,
						rotation : -499027.4306640625,
						radius : 1971704.7626953125,
					),
					slug : 'IMnvw6xBKWjHDdF8',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-5274476022408818780),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-6893916755161047397),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-7709089292332152580),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5503898449611381523),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 34,
				forwards_count : 72,
				reactions : array(
					$client->reactionCount(
						chosen_order : 58,
						reaction : $client->reactionEmpty(...),
						count : 19,
					),
				),
				reactions_count : 28,
				recent_viewers : array(3677508284957202479),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(61),
		),
	),
	pinned_to_top : array(44),
	chats : array(
		$client->chatEmpty(
			id : 1217395948576476882,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8296478170678512932,
			title : 'VjB5hoGAkPHtFMv6',
			photo : $client->chatPhotoEmpty(),
			participants_count : 46,
			date : 67,
			version : 44,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 62,
			),
		),
		$client->chatForbidden(
			id : -7237521204745930584,
			title : 'qJ5t2CYcW13eD0bR',
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
			id : 1023905623825510910,
			access_hash : 8760642913249020119,
			title : 'w6Mp07vQ4AW8OiLa',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nLICfY72XNEkWQSJ',
					reason : 'HQkvJb2Xzu9NTStA',
					text : 'YAtQlyefRXTjwIPW',
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
				until_date : 71,
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
				until_date : 91,
			),
			participants_count : 41,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 34,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : -9047204986183085246,
			),
			profile_color : $client->peerColor(
				color : 27,
				background_emoji_id : -8005077422667222562,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 33,
			subscription_until_date : 46,
			bot_verification_icon : 42228897014291727,
			send_paid_messages_stars : -7907422841157716225,
			linked_monoforum_id : -5990791047236456099,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -8621641521268763357,
			access_hash : -7933192058035285205,
			title : 'L7ptQZ8UzqaShBg5',
			until_date : 9,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6317309340642335719,
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
			bot_forum_can_manage_topics : true,
			id : -5044353906507099284,
			access_hash : 7516955377836133914,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'sapimgWY9bnBjV7d',
					reason : '7pqVgW4XDzkQhMTa',
					text : 'aJKt3qrC5ly8Fkzp',
				),
			),
			bot_inline_placeholder : '9aYByerfcKEDUlmZ',
			lang_code : 'Zl8FctwgOENmSG6C',
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
				max_id : 60,
			),
			color : $client->peerColor(
				color : 67,
				background_emoji_id : 2170405785038401249,
			),
			profile_color : $client->peerColor(
				color : 3,
				background_emoji_id : -3198304241724763505,
			),
			bot_active_users : 15,
			bot_verification_icon : 3317496852161499775,
			send_paid_messages_stars : -6612231519130837871,
		),
	),
);
```