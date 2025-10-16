# updates

**Description** : *Full constructor of updates*

**Layer** : 216

```tl
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Total number of sent updates |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updates(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 6,
				peer_id : $client->peerUser(...),
			),
			pts : 56,
			pts_count : 11,
		),
		$client->updateMessageID(
			id : 93,
			random_id : 1784065605198906326,
		),
		$client->updateDeleteMessages(
			messages : array(57),
			pts : 10,
			pts_count : 77,
		),
		$client->updateUserTyping(
			user_id : 748031723531535479,
			top_msg_id : 70,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -8496464871452821388,
			from_id : $client->peerUser(
				user_id : 428877728355829301,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -782267162920695945,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 906079639294598208,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -3863541623194428965,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 72,
			device : 'GhbHz25KRit6fASy',
			location : 'mYoS4IleBsLG0TAq',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -6639304244318053570,
				chat_id : 39,
				date : 66,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 60,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 20,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 97,
			),
			date : 57,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 54,
			max_date : 54,
			date : 91,
		),
		$client->updateChatParticipantAdd(
			chat_id : 2542872829974330175,
			user_id : -4009704562280709401,
			inviter_id : -4640288627728966749,
			date : 24,
			version : 62,
		),
		$client->updateChatParticipantDelete(
			chat_id : 3461870741685398357,
			user_id : -4366241912476234343,
			version : 54,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 54,
					ip_address : '127.0.0.1',
					port : 72,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 82,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 24,
			type : 'ha1mAn34VlyI06Db',
			message : '0iVZnY3JCO2U1WEX',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 86,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 58,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 63,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 39,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 73,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 29,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 75,
					language : 'AlQSUGWDe4mXTwVF',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 40,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 15,
					user_id : 6513700089902791160,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 99,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 4,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 11,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 66,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 41,
					document_id : -3140819260874680537,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 66,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-5432219851293914744),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(65539821874661618),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-6415289497649386163),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(4400069344319917341),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 6843971022176324953,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 81,
			peer : $client->peerUser(
				user_id : 1663217301287890207,
			),
			top_msg_id : 90,
			max_id : 42,
			still_unread_count : 60,
			pts : 67,
			pts_count : 86,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -6660159023466290914,
			),
			max_id : 70,
			pts : 60,
			pts_count : 90,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 2594325186046591190,
				url : 'https://docs.liveproto.dev',
			),
			pts : 59,
			pts_count : 10,
		),
		$client->updateReadMessagesContents(
			messages : array(80),
			pts : 90,
			pts_count : 23,
			date : 90,
		),
		$client->updateChannelTooLong(
			channel_id : -4381399368669228121,
			pts : 73,
		),
		$client->updateChannel(
			channel_id : -6136994930688190050,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 48,
				peer_id : $client->peerUser(...),
			),
			pts : 50,
			pts_count : 80,
		),
		$client->updateReadChannelInbox(
			folder_id : 56,
			channel_id : -3038888860129504106,
			max_id : 94,
			still_unread_count : 1,
			pts : 15,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 9039905040510731739,
			messages : array(51),
			pts : 50,
			pts_count : 48,
		),
		$client->updateChannelMessageViews(
			channel_id : -691931060714633178,
			id : 49,
			views : 51,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 7176887940571577661,
			user_id : 1938358802858455484,
			is_admin : true,
			version : 69,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(5274739948638293207),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -277015136978440711,
			user_id : -9089806436411308832,
			query : 'ThZzCy87q6L3iEeU',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'JDBKmdhxWNabkG5R',
		),
		$client->updateBotInlineSend(
			user_id : 1175749120711520017,
			query : 'pU7D64Zf2xuIY0SR',
			geo : $client->geoPointEmpty(),
			id : 'bPH7mqZ8K4n1aU92',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 23,
				id : -8286210167500069051,
				access_hash : 8947332705088549473,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 26,
				peer_id : $client->peerUser(...),
			),
			pts : 3,
			pts_count : 12,
		),
		$client->updateBotCallbackQuery(
			query_id : -1773172808059250322,
			user_id : 5025524377475462623,
			peer : $client->peerUser(
				user_id : 7279069158625437670,
			),
			msg_id : 72,
			chat_instance : 8448376850078052284,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'EJB8NjziXFZ2yOWA',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(...),
			),
			pts : 49,
			pts_count : 92,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 826757675723136462,
			user_id : -5545094093981558259,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 72,
				id : -7904813262269236519,
				access_hash : -5784514378106305870,
			),
			chat_instance : -4865501335605779297,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'TBkarWOmdiIGQNDf',
		),
		$client->updateReadChannelOutbox(
			channel_id : 2816276127251200689,
			max_id : 49,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 1316518312460256987,
			),
			top_msg_id : 65,
			saved_peer_id : $client->peerUser(
				user_id : 9159928077210336724,
			),
			draft : $client->draftMessageEmpty(
				date : 54,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 2743580402279643280,
			webpage : $client->webPageEmpty(
				id : 3627597940838692018,
				url : 'https://docs.liveproto.dev',
			),
			pts : 46,
			pts_count : 93,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 69,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 46,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 90,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'p2vFTbntw5KS07xa',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -5258372016020755268,
			data : $client->dataJSON(
				data : 'gFtylM2SA4nvewPW',
			),
			timeout : 37,
		),
		$client->updateBotShippingQuery(
			query_id : -8654151675360919963,
			user_id : 6469539242091404403,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'BJgxRbDfIWhLlkUr',
				street_line2 : 'AqrSbkl7yp1M93hn',
				city : 'VASmKCsxQRPiFBtY',
				state : 'aGcKWp5AJiNvu7UC',
				country_iso2 : 'q9OSGPRFdjQJXeWE',
				post_code : 'aF3RQokfhv0pAESI',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -3276879658137501567,
			user_id : -4667084124883671538,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'LRstEVGQzPlC0cZv',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : '9TFj8EfNSmRLlAYv',
			currency : 'wqLk0l1VNEHacU4P',
			total_amount : -6867309875929886291,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 3728941089296884177,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'rbzOksNxEL9WwetV',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'GBqbQZKRy64DfLkY',
				from_version : 3,
				version : 30,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 4234728781032094895,
			top_msg_id : 96,
			saved_peer_id : $client->peerUser(
				user_id : 6113903058964693738,
			),
			messages : array(73),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 3530487837672142910,
			available_min_id : 63,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : 7584341732767707574,
			),
		),
		$client->updateMessagePoll(
			poll_id : 3688593032078908359,
			poll : $client->poll(
				id : 6060842614596565605,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 20,
				close_date : 93,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 26,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : '0rIuoPNTBHfGMpiC',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -8390349060717526142,
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
				until_date : 8,
			),
			version : 43,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 20,
				),
			),
			pts : 83,
			pts_count : 6,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -9093911882720405457,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 29,
				request_chat_title : 'GauvCIQ1RVX53cH9',
				request_chat_date : 49,
				business_bot_id : -991917546637390401,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -7361992379979384865,
				registration_month : 'U2CAx09klapQEYRS',
				phone_country : '+1234567890',
				name_change_date : 14,
				photo_change_date : 31,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 50,
					distance : 89,
				),
				$client->peerSelfLocated(
					expires : 53,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 3,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -6526933212404135741,
			),
			messages : array(67),
			sent_messages : array(31),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 5740997651979344595,
				access_hash : -2447733680091721049,
				slug : 'jOJhS7ZVQKqR5p2H',
				title : 'h7GD35jLEF1VscQ6',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'q60JdbF9hxmYunNi',
				installs_count : 81,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -7773598338720222327,
			),
			msg_id : 70,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -4166026969037413543,
			peer : $client->peerUser(
				user_id : -6833500212031962885,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 64,
		),
		$client->updateDialogFilter(
			id : 100,
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
				id : 26,
				title : $client->textWithEntities(...),
				emoticon : 'xuK1ayE83lpBMOdm',
				color : 86,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(27),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -2125694922203583089,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 6027425407232072805,
			id : 39,
			forwards : 87,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -8189927440095040011,
			top_msg_id : 28,
			read_max_id : 47,
			broadcast_id : 2987356591353361219,
			broadcast_post : 79,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -5809173770153594971,
			top_msg_id : 67,
			read_max_id : 36,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 747401297468859342,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -5516467241120368241,
			top_msg_id : 44,
			from_id : $client->peerUser(
				user_id : 2957950797513048348,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -2596925754985088968,
			),
			messages : array(43),
			pts : 27,
			pts_count : 23,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -4782880541978626426,
			messages : array(4),
			pts : 59,
			pts_count : 100,
		),
		$client->updateChat(
			chat_id : -6864331351020550570,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -126110782984291804,
				access_hash : -530697138312282083,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 68,
					active_date : 9,
					source : 41,
					volume : 56,
					about : 'u61cjU3ZCtMTw7do',
					raise_hand_rating : 3603319721403454282,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 44,
		),
		$client->updateGroupCall(
			chat_id : -6232185715776307813,
			call : $client->groupCallDiscarded(
				id : 2880522935691035952,
				access_hash : 7611092193050893340,
				duration : 31,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 6529709424063924631,
			),
			ttl_period : 67,
		),
		$client->updateChatParticipant(
			chat_id : 8748015283379942546,
			date : 90,
			actor_id : -570018815661613065,
			user_id : 201896027480821563,
			prev_participant : $client->chatParticipant(
				user_id : 4695694014810406649,
				inviter_id : 8860612653194850966,
				date : 65,
			),
			new_participant : $client->chatParticipant(
				user_id : -1346379293554359774,
				inviter_id : 7981786142984404085,
				date : 52,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Ebam42BtsijzKN9M',
				admin_id : -6701705156101823120,
				date : 24,
				start_date : 74,
				expire_date : 44,
				usage_limit : 47,
				usage : 25,
				requested : 50,
				subscription_expired : 36,
				title : 'tukTQgezCZPDns8N',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 12,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -3052632282210153518,
			date : 15,
			actor_id : 4625688907306569261,
			user_id : 461885805387446063,
			prev_participant : $client->channelParticipant(
				user_id : 5581160685466560878,
				date : 39,
				subscription_until_date : 82,
			),
			new_participant : $client->channelParticipant(
				user_id : 3761194690417487577,
				date : 6,
				subscription_until_date : 48,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'uh3v1a0eDC4JbjOz',
				admin_id : -6818592631747207045,
				date : 19,
				start_date : 79,
				expire_date : 74,
				usage_limit : 36,
				usage : 99,
				requested : 22,
				subscription_expired : 51,
				title : 'Vsp6qeEo2T0FUAkR',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 44,
		),
		$client->updateBotStopped(
			user_id : -6954414170947394842,
			date : 49,
			stopped : false,
			qts : 11,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : '9Cgd1Ja7GP2hRmlr',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -5969188870873248408,
			),
			bot_id : -1264989944127816955,
			commands : array(
				$client->botCommand(
					command : 'qz65trj8hLy7BvHU',
					description : 'dkwArZfEPmqnGs0h',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 1054418147418924732,
			),
			requests_pending : 9,
			recent_requesters : array(6930502218802777790),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -4820701237809858198,
			),
			date : 52,
			user_id : 5069416904540821953,
			about : '6oSvqdb4gkZz0pE9',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'c43OlrUPS9dCJEjA',
				admin_id : -187443626693071046,
				date : 98,
				start_date : 46,
				expire_date : 45,
				usage_limit : 43,
				usage : 7,
				requested : 22,
				subscription_expired : 54,
				title : 'YEZBCfpsqFbyIVvh',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 46,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -3413553082813437825,
			),
			msg_id : 32,
			top_msg_id : 43,
			saved_peer_id : $client->peerUser(
				user_id : 602058602073367553,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -5534527282032280458,
		),
		$client->updateBotMenuButton(
			bot_id : 3336761499165912838,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 2974248031402002856,
			),
			msg_id : 17,
			transcription_id : -2705694775620054956,
			text : 'isKj6OlUxL4ydDhP',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -4579656783086990670,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 8168503934668060492,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -6153183359821754330,
			),
			msg_id : 90,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 86,
					h : 74,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 82,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -3883681631455315623,
			topic_id : 3,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -8732417862118579353,
			order : array(75),
		),
		$client->updateUser(
			user_id : 619202644981435724,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 3574420546081983606,
			),
			story : $client->storyItemDeleted(
				id : 15,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -3262101388045413764,
			),
			max_id : 11,
		),
		$client->updateStoryID(
			id : 79,
			random_id : 3383479985173862747,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 64,
				cooldown_until_date : 22,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 7015994624272160889,
			),
			story_id : 51,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -5016558856784923372,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'buJAE087GXB4ndQc',
				user_id : 6891392991989163742,
				giveaway_msg_id : 84,
				date : 22,
				expires : 29,
				used_gift_slug : '8aSVLjnWNs9zwXG5',
				multiplier : 64,
				stars : -6305938203735668780,
			),
			qts : 93,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 3455909281585865353,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 2964484344588406959,
			),
			wallpaper : $client->wallPaper(
				id : -3942102763550661687,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 4115040210841813125,
				slug : '0Wx4YikTw5jV8JMb',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -6825289765560461867,
			),
			msg_id : 87,
			date : 53,
			actor : $client->peerUser(
				user_id : 834591750507082112,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'y9b4fC2ASUNPwEpq',
				),
				$client->reactionCustomEmoji(
					document_id : -3810657060958620244,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'lZzhkiWbEFexKyBS',
				),
				$client->reactionCustomEmoji(
					document_id : 7427378008477419510,
				),
				$client->reactionPaid(),
			),
			qts : 98,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 7587106184430098968,
			),
			msg_id : 12,
			date : 77,
			reactions : array(
				$client->reactionCount(
					chosen_order : 62,
					reaction : $client->reactionEmpty(...),
					count : 31,
				),
			),
			qts : 78,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 60,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'kKrA8x1ZsRcfp92j',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 27,
					shortcut : 'I82VovQhJ1XiGcPe',
					top_message : 59,
					count : 43,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 59,
				shortcut : 'nJ8Nd7qWHrOsLXT0',
				top_message : 43,
				count : 33,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 39,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 32,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 90,
			messages : array(24),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'rbVJ6pLwkfBHSeUx',
				user_id : -2009719076522986549,
				dc_id : 64,
				date : 56,
				rights : $client->businessBotRights(...),
			),
			qts : 77,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'Dv5M8INECVd4Zsil',
			message : $client->messageEmpty(
				id : 74,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 53,
				peer_id : $client->peerUser(...),
			),
			qts : 43,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'z2h5cHq9R0jel48S',
			message : $client->messageEmpty(
				id : 13,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 48,
				peer_id : $client->peerUser(...),
			),
			qts : 8,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : '4DoAwzZpXbjacNM7',
			peer : $client->peerUser(
				user_id : -1858096462020536093,
			),
			messages : array(40),
			qts : 31,
		),
		$client->updateNewStoryReaction(
			story_id : 26,
			peer : $client->peerUser(
				user_id : 3720920306713414339,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -6727511143993620770,
				nanos : 93,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 6450326214117847977,
			user_id : -8146612961307680745,
			connection_id : 'S0jEaP7dkeGAluKU',
			message : $client->messageEmpty(
				id : 99,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 8796348761410033887,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -6080406487593487579,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 40,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 3989086672873479620,
			payload : 'S16bgtU90un8yoNm',
			qts : 9,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 93,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 6136908933349479102,
				access_hash : -6585275059036645312,
			),
			sub_chain_id : 38,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 87,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -5655310656735251588,
			saved_peer_id : $client->peerUser(
				user_id : -7159213171456599132,
			),
			read_max_id : 67,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -5628117984222656101,
			saved_peer_id : $client->peerUser(
				user_id : 9022523577387191322,
			),
			read_max_id : 88,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 77214611663190231,
			saved_peer_id : $client->peerUser(
				user_id : -6593518612361929714,
			),
		),
		$client->updatePinnedForumTopic(
			pinned : 71,
			peer : $client->peerUser(
				user_id : -7154627048556691433,
			),
			topic_id : 3,
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -5585565567636865232,
				access_hash : -5097249217734221215,
			),
			from_id : $client->peerUser(
				user_id : 7093093424880071130,
			),
			random_id : -5456111995508174420,
			message : $client->textWithEntities(
				text : 'TGfZb1jNkgSKrHL6',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -929612416428590958,
			text : 'CvYzSEwnmNf4DFP5',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -605922015289159343,
			payload : 'z5LsTQ0GUJ9DtCBi',
			until_date : 70,
			qts : 2,
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -5797955025073893213,
				access_hash : -3725948143195428185,
			),
			from_id : $client->peerUser(
				user_id : -8157511155558154439,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 2975664626084927852,
			),
			order : array(53),
		),
	),
	users : array(
		$client->userEmpty(
			id : -2525824878151337677,
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
			id : -3303405526157922975,
			access_hash : -5036408913773775626,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 97,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'agFpqu89JBTPIKLn',
					reason : 'ekOQPKCa1HGtVJ0d',
					text : 'xCpP9zA2kTaqSl6v',
				),
			),
			bot_inline_placeholder : 'DCkS9ZvQE0UHn8oP',
			lang_code : 'vNudoJTRIBZfbM0G',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 18,
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -8345167711753804876,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : -8782634499896111810,
			),
			bot_active_users : 28,
			bot_verification_icon : 6300607201196076227,
			send_paid_messages_stars : -6951912314117542312,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2426526431004186298,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8422185688777048121,
			title : 'iU2dzQSCwqOoF3tP',
			photo : $client->chatPhotoEmpty(),
			participants_count : 56,
			date : 42,
			version : 20,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 23,
			),
		),
		$client->chatForbidden(
			id : 8803528213232488796,
			title : 'cLp62X4dj1mHR3kz',
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
			id : 8473798190728130076,
			access_hash : 4229159635839005404,
			title : 'gy5QVXCD28eKU06P',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fpgFT9vPBlXMQ0r1',
					reason : 'Wb3SFVr9f6wEk4jo',
					text : 'N5LlRZQE1DhqC4WS',
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
				until_date : 21,
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
				until_date : 60,
			),
			participants_count : 38,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 47,
			color : $client->peerColor(
				color : 86,
				background_emoji_id : 433797992347611438,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : 160025029771634311,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 17,
			subscription_until_date : 24,
			bot_verification_icon : 4269214980533890767,
			send_paid_messages_stars : 2870013977200755157,
			linked_monoforum_id : 2601607845623914962,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5469732459357467402,
			access_hash : -6871933572748634158,
			title : 'xPTpSZmDv6FM0gky',
			until_date : 22,
		),
	),
	date : 12,
	seq : 39,
);
```