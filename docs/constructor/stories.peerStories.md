# stories.peerStories

**Description** : *Active story list of a specific peer*

**Layer** : 218

```tl
stories.peerStories#cae68768 stories:PeerStories chats:Vector<Chat> users:Vector<User> = stories.PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stories</mark> | [`PeerStories`](type/PeerStories) | Stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.PeerStories](type/stories.PeerStories)

---

## Example

```php
$storiesPeerStories = $client->stories->peerStories(
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -5427706983106470323,
		),
		max_read_id : 2,
		stories : array(
			$client->storyItemDeleted(
				id : 46,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 78,
				date : 91,
				expire_date : 19,
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
				id : 17,
				date : 25,
				from_id : $client->peerUser(
					user_id : 1694249192771464273,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'jxDJ2USEVhv7w5OF',
					story_id : 26,
				),
				expire_date : 87,
				caption : 'qNtkVRBog0UWynQ3',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 44,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 65,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 97,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 21,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 38,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 70,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 10,
						language : 'nrQwYuzyJN0PHpB4',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 98,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 58,
						user_id : -7751441173473687303,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 15,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 2,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 71,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 66,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 66,
						document_id : -6604523032650650295,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 86,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'Tl6tNuw0DMA3Sepj',
						address : 'g3i8Mp0OoR9KnrJs',
						provider : 'S23RfQecAlIbKiVo',
						venue_id : 'aFeyKtSvDzHsWmBT',
						venue_type : '035vprltY7FG6CTo',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -7695416411794338748,
						result_id : '3MSG0khePCsRVYxQ',
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
						channel_id : -4443435666277499663,
						msg_id : 9,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 13,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'Tj1Yh7QFg08ViWfS',
						temperature_c : 89915.533203125,
						color : 68,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'EfURnJrlQO5pgG7c',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(-6972884478104812420),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-4855879355024427462),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(2460600501136633321),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(2622914205506786264),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 18,
					forwards_count : 2,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 92,
					recent_viewers : array(1280528620938384293),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(91),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5492657518033903165,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6835794026906594785,
			title : '1cnZ5s27outYrqwM',
			photo : $client->chatPhotoEmpty(),
			participants_count : 28,
			date : 30,
			version : 99,
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
				until_date : 11,
			),
		),
		$client->chatForbidden(
			id : 2531433996130343301,
			title : 'SGJgu89Fs2UZ5ktl',
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
			id : 1570539286647410345,
			access_hash : -7201855466419451292,
			title : 'g5OVQEl38MdG2Aap',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 24,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BpUafWmTJE7L1srN',
					reason : 'hidtqkfDInevuSy6',
					text : 'TQG6Je2w0PcLqSYN',
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
				until_date : 20,
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
				until_date : 52,
			),
			participants_count : 12,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 63,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 3458117181144249277,
			),
			profile_color : $client->peerColor(
				color : 73,
				background_emoji_id : -5326354373147029613,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 91,
			subscription_until_date : 16,
			bot_verification_icon : 9034424582275817909,
			send_paid_messages_stars : 7257510879460941256,
			linked_monoforum_id : 6245273935410658557,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5488518975912397149,
			access_hash : 5036016090082019888,
			title : 'GTwjX86nB2us9DO5',
			until_date : 56,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8949348569816891025,
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
			id : 2338871339162213484,
			access_hash : 3740575442361447968,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Z1SgyORnL8VirBlP',
					reason : 'qj1Hm0dcCF4QGpv8',
					text : 'yUWPVbe2YGcEALKS',
				),
			),
			bot_inline_placeholder : 'RGXiFy2fTxS3CAjK',
			lang_code : 'YeOVc2GdzX9lLqwE',
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
				max_id : 88,
			),
			color : $client->peerColor(
				color : 80,
				background_emoji_id : 1935230003637969748,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : -2050340496860030985,
			),
			bot_active_users : 82,
			bot_verification_icon : -7541446418981518890,
			send_paid_messages_stars : -2868388070507453491,
		),
	),
);
```