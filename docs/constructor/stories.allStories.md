# stories.allStories

**Description** : *Full list of active \(or active and hidden\) stories*

**Layer** : 218

```tl
stories.allStories#6efc5e81 flags:# has_more:flags.0?true count:int state:string peer_stories:Vector<PeerStories> chats:Vector<Chat> users:Vector<User> stealth_mode:StoriesStealthMode = stories.AllStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_more** | [`flags.0?true`](type/true) | Whether more results can be fetched as described here » |
| <mark>count</mark> | [`int`](type/int) | Total number of active (or active and hidden) stories |
| <mark>state</mark> | [`string`](type/string) | State to use for pagination |
| <mark>peer_stories</mark> | [`Vector<PeerStories>`](type/PeerStories) | Stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| <mark>stealth_mode</mark> | [`StoriesStealthMode`](type/StoriesStealthMode) | Current stealth mode information |

---

## Type

[stories.AllStories](type/stories.AllStories)

---

## Example

```php
$storiesAllStories = $client->stories->allStories(
	has_more : true,
	count : 30,
	state : 'SFMPXuvrI7qsb2do',
	peer_stories : array(
		$client->peerStories(
			peer : $client->peerUser(
				user_id : 3419461544461977718,
			),
			max_read_id : 48,
			stories : array(
				$client->storyItemDeleted(
					id : 27,
				),
				$client->storyItemSkipped(
					close_friends : true,
					live : true,
					id : 11,
					date : 92,
					expire_date : 79,
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
					id : 86,
					date : 54,
					from_id : $client->peerUser(
						user_id : -6058656710150745756,
					),
					fwd_from : $client->storyFwdHeader(
						modified : true,
						from : $client->peerUser(...),
						from_name : 'hrMABJgl3aPETo09',
						story_id : 65,
					),
					expire_date : 48,
					caption : 'EuCJpoPef5RlB190',
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 34,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 65,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 69,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 94,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 87,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 71,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 99,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 35,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 9,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 2,
							language : 'LPOpZ6cNUrbmwVHW',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 2,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 36,
							user_id : 8309877488199328007,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 51,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 27,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 6,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 100,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 24,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 17,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 36,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 67,
							document_id : 1672132414224322617,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 1,
						),
					),
					media : $client->messageMediaEmpty(),
					media_areas : array(
						$client->mediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							geo : $client->geoPointEmpty(...),
							title : 'k0wOvcnK5b1FaT8m',
							address : 'rbNoPOzSX2Qlh8Je',
							provider : 'AblfyCXeRtrHKv28',
							venue_id : 'a85OpMgmvslJFWkx',
							venue_type : 'Ky4QsGzReH1tn3Zv',
						),
						$client->inputMediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							query_id : 627092707098180337,
							result_id : 'uFA3dwoeRSb29Gjx',
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
							channel_id : -1750710417331903084,
							msg_id : 88,
						),
						$client->inputMediaAreaChannelPost(
							coordinates : $client->mediaAreaCoordinates(...),
							channel : $client->get_input_channel(channel : '@LiveProto'),
							msg_id : 6,
						),
						$client->mediaAreaUrl(
							coordinates : $client->mediaAreaCoordinates(...),
							url : 'https://docs.liveproto.dev',
						),
						$client->mediaAreaWeather(
							coordinates : $client->mediaAreaCoordinates(...),
							emoji : 'UzK170CRLgEBoYGn',
							temperature_c : -148918.298828125,
							color : 15,
						),
						$client->mediaAreaStarGift(
							coordinates : $client->mediaAreaCoordinates(...),
							slug : '7wnEjSBG3p6baoYX',
						),
					),
					privacy : array(
						$client->privacyValueAllowContacts(),
						$client->privacyValueAllowAll(),
						$client->privacyValueAllowUsers(
							users : array(-7088021401030174540),
						),
						$client->privacyValueDisallowContacts(),
						$client->privacyValueDisallowAll(),
						$client->privacyValueDisallowUsers(
							users : array(2697568628395188538),
						),
						$client->privacyValueAllowChatParticipants(
							chats : array(4405749839835989869),
						),
						$client->privacyValueDisallowChatParticipants(
							chats : array(-7705464000872147943),
						),
						$client->privacyValueAllowCloseFriends(),
						$client->privacyValueAllowPremium(),
						$client->privacyValueAllowBots(),
						$client->privacyValueDisallowBots(),
					),
					views : $client->storyViews(
						has_viewers : true,
						views_count : 30,
						forwards_count : 44,
						reactions : array(
							$client->reactionCount(...),
						),
						reactions_count : 20,
						recent_viewers : array(-1479401566002241519),
					),
					sent_reaction : $client->reactionEmpty(),
					albums : array(24),
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1855501321177794495,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5078932035626037058,
			title : 'IWH1ybLvurQ0A5j4',
			photo : $client->chatPhotoEmpty(),
			participants_count : 99,
			date : 63,
			version : 5,
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
				until_date : 37,
			),
		),
		$client->chatForbidden(
			id : 362968444250921669,
			title : 'Xaf73xA1igwVks8y',
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
			id : -5065072075467859970,
			access_hash : 3924251950883098712,
			title : 'YhVoRHtqIQ5ULjac',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'H54AJiS1Bq7ZtU89',
					reason : 'l2raqUJBYTgPEx60',
					text : 'dDn5CZRUa6kMIsGw',
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
				until_date : 10,
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
				until_date : 10,
			),
			participants_count : 22,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 66,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : -5312019569035686558,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : 4171018122862501559,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 16,
			subscription_until_date : 50,
			bot_verification_icon : -5387703231334859464,
			send_paid_messages_stars : -9149783901917138377,
			linked_monoforum_id : -2872376277714151304,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3234185885047055827,
			access_hash : 1393995883589724638,
			title : 'IVwuWANp2njYoSvg',
			until_date : 47,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4199248600119498987,
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
			id : -8824605762704280054,
			access_hash : 5493092325258716836,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VJ6velHzUyTqARar',
					reason : 'fdE28kZDyPX1WtNH',
					text : 'G6uM2F58S4iA1W9T',
				),
			),
			bot_inline_placeholder : 'EOizunW4QrNp5fJS',
			lang_code : 'yMPoGeCrLuRwbKlD',
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
				max_id : 19,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 4845977371478870532,
			),
			profile_color : $client->peerColor(
				color : 22,
				background_emoji_id : 4132636405429634494,
			),
			bot_active_users : 19,
			bot_verification_icon : -48692933294517212,
			send_paid_messages_stars : 2678674920215480397,
		),
	),
	stealth_mode : $client->storiesStealthMode(
		active_until_date : 90,
		cooldown_until_date : 30,
	),
);
```