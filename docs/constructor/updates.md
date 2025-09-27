# updates

**Description** : *Full constructor of updates*

**Layer** : 214

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
				id : 58,
				peer_id : $client->peerUser(...),
			),
			pts : 57,
			pts_count : 46,
		),
		$client->updateMessageID(
			id : 45,
			random_id : -4830373626184860690,
		),
		$client->updateDeleteMessages(
			messages : array(45),
			pts : 77,
			pts_count : 21,
		),
		$client->updateUserTyping(
			user_id : -1507324429532638602,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 4456585634191689291,
			from_id : $client->peerUser(
				user_id : -873967023740541679,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -6101298007574454906,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -2402503168808902842,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -4363749645620412004,
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
			date : 79,
			device : 'ZEaidpRo1NAB9LbY',
			location : '1DbhZodveELuK86N',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 116031770076673501,
				chat_id : 90,
				date : 82,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 57,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 33,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 59,
			),
			date : 19,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 28,
			max_date : 69,
			date : 74,
		),
		$client->updateChatParticipantAdd(
			chat_id : 1914626063953306405,
			user_id : -982164917098576578,
			inviter_id : 1441282163335332639,
			date : 87,
			version : 64,
		),
		$client->updateChatParticipantDelete(
			chat_id : 7894459955800957818,
			user_id : 6989149637399591880,
			version : 24,
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
					id : 0,
					ip_address : '127.0.0.1',
					port : 99,
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
				silent : true,
				mute_until : 38,
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
			inbox_date : 33,
			type : '1FYfh6CDdIBO37S4',
			message : '2cQ7Zva3mHd0FbW6',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 12,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 70,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 55,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 41,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 66,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 41,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 27,
					language : 'byTerf5ihcvUsqJj',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 37,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 2,
					user_id : -476461482846867711,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 53,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 62,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 16,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 79,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 84,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 49,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 75,
					document_id : -5763031007387011646,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 51,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-8675484334801638299),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-6971897744198584107),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(4122691597236061356),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-8506231387002687339),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -4308049317381672652,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 26,
			peer : $client->peerUser(
				user_id : -4516578446736199621,
			),
			max_id : 23,
			still_unread_count : 95,
			pts : 77,
			pts_count : 47,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 625226587981058632,
			),
			max_id : 83,
			pts : 67,
			pts_count : 65,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -3196457303778989112,
				url : 'https://docs.liveproto.dev',
			),
			pts : 76,
			pts_count : 58,
		),
		$client->updateReadMessagesContents(
			messages : array(99),
			pts : 71,
			pts_count : 26,
			date : 5,
		),
		$client->updateChannelTooLong(
			channel_id : -9083360202780625803,
			pts : 19,
		),
		$client->updateChannel(
			channel_id : 5136664798921513009,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 67,
				peer_id : $client->peerUser(...),
			),
			pts : 33,
			pts_count : 25,
		),
		$client->updateReadChannelInbox(
			folder_id : 2,
			channel_id : -8080485659364618858,
			max_id : 58,
			still_unread_count : 96,
			pts : 52,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -9172971303541716193,
			messages : array(81),
			pts : 65,
			pts_count : 17,
		),
		$client->updateChannelMessageViews(
			channel_id : 4336407138361884164,
			id : 13,
			views : 21,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -1814107231919842641,
			user_id : 1123039935156567778,
			is_admin : false,
			version : 95,
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
			order : array(3436408444847059911),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -1923676623607526970,
			user_id : 5255303302965225173,
			query : 'LxOyQekfZJWFuXK6',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'QqRg8MSIz32sdAXb',
		),
		$client->updateBotInlineSend(
			user_id : 1771855468266153965,
			query : 'Ie6QWMJ8D1cXgR3E',
			geo : $client->geoPointEmpty(),
			id : '4UiSyqz8df7EtObj',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 45,
				id : 536404659781884112,
				access_hash : -298486439507661699,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 87,
				peer_id : $client->peerUser(...),
			),
			pts : 97,
			pts_count : 96,
		),
		$client->updateBotCallbackQuery(
			query_id : -3732200457054329012,
			user_id : -3094951772579997725,
			peer : $client->peerUser(
				user_id : -2959113481204741081,
			),
			msg_id : 38,
			chat_instance : 4707111448645903913,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'GABWVzXtIPxmMoKd',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 94,
				peer_id : $client->peerUser(...),
			),
			pts : 63,
			pts_count : 61,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -8337796528355273626,
			user_id : 3052487161939779514,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 50,
				id : 8595908327294565407,
				access_hash : 7237863676286058715,
			),
			chat_instance : 1105057746725387952,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'SlGVWe40BxROUXYT',
		),
		$client->updateReadChannelOutbox(
			channel_id : -6631561461976486094,
			max_id : 15,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 8588144327342826194,
			),
			top_msg_id : 77,
			saved_peer_id : $client->peerUser(
				user_id : -3617837130807821782,
			),
			draft : $client->draftMessageEmpty(
				date : 51,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 3098794020281296824,
			webpage : $client->webPageEmpty(
				id : -4669998393081859931,
				url : 'https://docs.liveproto.dev',
			),
			pts : 23,
			pts_count : 43,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 63,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 30,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 35,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'FxVyuoBGPaqWUkpO',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 5203364153631865879,
			data : $client->dataJSON(
				data : 'n4QNv9bARLpfkH5I',
			),
			timeout : 73,
		),
		$client->updateBotShippingQuery(
			query_id : -6794049373777140411,
			user_id : 856074871836703513,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'C2IuhARr5ypMxO4Y',
				street_line2 : '2cVv107i6MQxN3du',
				city : 'y3DB9neAWOY1k0Ml',
				state : 'JCrIzkRKb4yDGvh5',
				country_iso2 : 'hb0KNectRQgmIxZE',
				post_code : 'ptimkW4OjrH8zxZQ',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -4833600073064403153,
			user_id : 3842821584285678518,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'uL1nAsbZV2qCdkRf',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : '94WMLn6k5loatBNu',
			currency : 'y9PovxmTqBkWeFp4',
			total_amount : 6858944011700467117,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -659896946592274728,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'qxy1aUXBAJnEPVZM',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'dmXa8YW1u5nFJAj0',
				from_version : 75,
				version : 63,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 2218455882034470524,
			top_msg_id : 81,
			saved_peer_id : $client->peerUser(
				user_id : 5365533154896699340,
			),
			messages : array(95),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -1492474151952556686,
			available_min_id : 57,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : 2637172121252707770,
			),
		),
		$client->updateMessagePoll(
			poll_id : 2521017750570520640,
			poll : $client->poll(
				id : -2140006798970518000,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 78,
				close_date : 19,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 48,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'sqrXtcdx6yvGOoEa',
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
				user_id : 1250900503801844040,
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
				until_date : 89,
			),
			version : 71,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 63,
				),
			),
			pts : 46,
			pts_count : 22,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -3305025876117340870,
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
				geo_distance : 47,
				request_chat_title : 'pl2vQ7NgeZSHhCm0',
				request_chat_date : 35,
				business_bot_id : -3512261850657124188,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 8959727273589624406,
				registration_month : 'ZLiI7eagF1Gvcf0N',
				phone_country : '+1234567890',
				name_change_date : 31,
				photo_change_date : 51,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 34,
					distance : 71,
				),
				$client->peerSelfLocated(
					expires : 77,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 35,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -4604725268358205322,
			),
			messages : array(49),
			sent_messages : array(95),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 24890740492691448,
				access_hash : -3632698029107885320,
				slug : 'iNWr0Yb63V4B8sxw',
				title : 'EXa14QpMgPLduNS7',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'ePYdWDhjtplqBE5a',
				installs_count : 23,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 9118987028214643184,
			),
			msg_id : 56,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 2726007683873831205,
			peer : $client->peerUser(
				user_id : 280273700434416024,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 81,
		),
		$client->updateDialogFilter(
			id : 57,
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
				id : 10,
				title : $client->textWithEntities(...),
				emoticon : '3RTx7dSBDm45jGvb',
				color : 99,
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
			order : array(56),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 8990702022030043391,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -3970929209670881424,
			id : 12,
			forwards : 64,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -2359634069052231387,
			top_msg_id : 6,
			read_max_id : 9,
			broadcast_id : -8620540515494883943,
			broadcast_post : 93,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 4470629215835205586,
			top_msg_id : 100,
			read_max_id : 46,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -1339459355701378769,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -1278433400205134101,
			top_msg_id : 42,
			from_id : $client->peerUser(
				user_id : -5728717357352635783,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -6708317063179857326,
			),
			messages : array(63),
			pts : 89,
			pts_count : 3,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 4469239311546746929,
			messages : array(48),
			pts : 31,
			pts_count : 65,
		),
		$client->updateChat(
			chat_id : 1479705705855272715,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 8649852375018158138,
				access_hash : -5218858442247317765,
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
					date : 87,
					active_date : 1,
					source : 84,
					volume : 38,
					about : 'j6atGy3I9mcwNLrp',
					raise_hand_rating : 8769791530076123162,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 36,
		),
		$client->updateGroupCall(
			chat_id : -426851118814808857,
			call : $client->groupCallDiscarded(
				id : -8496479725729524526,
				access_hash : 3110510177563361026,
				duration : 49,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 5744416601892007957,
			),
			ttl_period : 59,
		),
		$client->updateChatParticipant(
			chat_id : -5966346295736762800,
			date : 48,
			actor_id : 1472318572928823390,
			user_id : -6277248919370194387,
			prev_participant : $client->chatParticipant(
				user_id : -3180000087446956006,
				inviter_id : -6352532994074819613,
				date : 67,
			),
			new_participant : $client->chatParticipant(
				user_id : -4499586636185880225,
				inviter_id : -3178016419817781808,
				date : 43,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'nEh0NwuXj71OpltH',
				admin_id : 7904016549031572882,
				date : 5,
				start_date : 11,
				expire_date : 18,
				usage_limit : 39,
				usage : 69,
				requested : 59,
				subscription_expired : 32,
				title : '6NqSLsVZwTpn8atm',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 51,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -1379025180388790822,
			date : 90,
			actor_id : 2537022557881529755,
			user_id : -5555032919250470789,
			prev_participant : $client->channelParticipant(
				user_id : 2085269581867595353,
				date : 70,
				subscription_until_date : 96,
			),
			new_participant : $client->channelParticipant(
				user_id : -2409839937698343508,
				date : 2,
				subscription_until_date : 57,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'L7jQeKUPb2cACp3R',
				admin_id : -6066446998897441969,
				date : 69,
				start_date : 14,
				expire_date : 24,
				usage_limit : 9,
				usage : 87,
				requested : 3,
				subscription_expired : 1,
				title : 'QlHmDN6Gs1Zzn9rV',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 95,
		),
		$client->updateBotStopped(
			user_id : -7945473685606326054,
			date : 37,
			stopped : true,
			qts : 48,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'cZT8uIdkajtz3sJo',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -5280107382623175833,
			),
			bot_id : 7368552265011093771,
			commands : array(
				$client->botCommand(
					command : 'LqjAdnQbIXESDiHc',
					description : 'DuLGKHlOc1zpg8NM',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -5827783968167945272,
			),
			requests_pending : 35,
			recent_requesters : array(327747965433083575),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 8017853396626421074,
			),
			date : 12,
			user_id : 5803774815343660622,
			about : 'bovjpyiVwl5C9HrP',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'kz6bvhgRpFyZoCSQ',
				admin_id : 372187504185608602,
				date : 35,
				start_date : 59,
				expire_date : 44,
				usage_limit : 46,
				usage : 19,
				requested : 75,
				subscription_expired : 90,
				title : 'rNGxQ6HiqSb7sA1D',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 9,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 8091489314846160126,
			),
			msg_id : 40,
			top_msg_id : 19,
			saved_peer_id : $client->peerUser(
				user_id : -5490147369662947647,
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
			query_id : -1767723058489993279,
		),
		$client->updateBotMenuButton(
			bot_id : 5917807675384074824,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -5642233821704815434,
			),
			msg_id : 23,
			transcription_id : -2913093996602138825,
			text : '5Ktpn7y4ksRoQ9OU',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -5742901637472134152,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -5141143249478534149,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 7097983475813725458,
			),
			msg_id : 14,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 67,
					h : 27,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 1,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -4467806491399395069,
			topic_id : 75,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -2146664805447686106,
			order : array(90),
		),
		$client->updateUser(
			user_id : 3207319539600237878,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -2413601342673061456,
			),
			story : $client->storyItemDeleted(
				id : 30,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -672963847318889070,
			),
			max_id : 25,
		),
		$client->updateStoryID(
			id : 99,
			random_id : -3905129505325593852,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 5,
				cooldown_until_date : 64,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -3924516698086021504,
			),
			story_id : 85,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -6175367150704530950,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'I7EhlB95daoV1zU2',
				user_id : 7378822810640087898,
				giveaway_msg_id : 50,
				date : 9,
				expires : 92,
				used_gift_slug : 'r74X9vbStoGj8nJE',
				multiplier : 21,
				stars : -8581082227061154512,
			),
			qts : 57,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -1560971925102718879,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -4683100637544078795,
			),
			wallpaper : $client->wallPaper(
				id : 3154076535473887178,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 3378606131817694257,
				slug : 'ZWEacngAy4oVJM8u',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 5673960283229734918,
			),
			msg_id : 82,
			date : 31,
			actor : $client->peerUser(
				user_id : -8543228793192943982,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'xXbhTeFU5oHzEKYa',
				),
				$client->reactionCustomEmoji(
					document_id : -6866248820472771853,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'MWlf13znwg0TboLX',
				),
				$client->reactionCustomEmoji(
					document_id : 4162791851753200572,
				),
				$client->reactionPaid(),
			),
			qts : 67,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 1154512389844732000,
			),
			msg_id : 6,
			date : 22,
			reactions : array(
				$client->reactionCount(
					chosen_order : 67,
					reaction : $client->reactionEmpty(...),
					count : 6,
				),
			),
			qts : 11,
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
					folder_id : 5,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'BPl3CrineDGgEz0U',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 51,
					shortcut : 'uG9NokHchbWn6x4C',
					top_message : 45,
					count : 32,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 67,
				shortcut : 'VkyHbNIXual2dPsQ',
				top_message : 9,
				count : 0,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 36,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 74,
			messages : array(35),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'FbWwX9jKHDGq3cJ6',
				user_id : -4075518140270467808,
				dc_id : 95,
				date : 8,
				rights : $client->businessBotRights(...),
			),
			qts : 2,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : '8C9XrNwHUv2DdjkR',
			message : $client->messageEmpty(
				id : 74,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 89,
				peer_id : $client->peerUser(...),
			),
			qts : 77,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'Ecb4raH6JDC1IjQS',
			message : $client->messageEmpty(
				id : 48,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 50,
				peer_id : $client->peerUser(...),
			),
			qts : 3,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : '1hvyIOqfxaRKlXSt',
			peer : $client->peerUser(
				user_id : 4923296879330369113,
			),
			messages : array(56),
			qts : 9,
		),
		$client->updateNewStoryReaction(
			story_id : 6,
			peer : $client->peerUser(
				user_id : 9078436006488608842,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -9129745201921288818,
				nanos : 0,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 7034405654653991415,
			user_id : -2822005266395947534,
			connection_id : 'AyGfowU4Ds9WjPKt',
			message : $client->messageEmpty(
				id : 6,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 36,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -5090996406760985458,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 8836524026845994345,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 10,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -1489150948046051799,
			payload : 'pJtkf2FobQiuKlc9',
			qts : 57,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 50,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -486861291306201793,
				access_hash : 5002592738105004745,
			),
			sub_chain_id : 37,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 67,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -2067668610987986018,
			saved_peer_id : $client->peerUser(
				user_id : -9066575736905688358,
			),
			read_max_id : 3,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -4421520077955940703,
			saved_peer_id : $client->peerUser(
				user_id : -4673071754023721734,
			),
			read_max_id : 34,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -1380757164656253863,
			saved_peer_id : $client->peerUser(
				user_id : -3754593978295675862,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -2116183598337605125,
			text : 'HXBYS4DCabP7hZVN',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 4860702368396562008,
			payload : 'cWBSafn6PeAvbDIx',
			until_date : 24,
			qts : 46,
		),
	),
	users : array(
		$client->userEmpty(
			id : 379861873525764459,
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
			id : -404615793795470129,
			access_hash : 5017411368533058200,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'rMdVFEGpPkxsQcXb',
					reason : 'xYNQCuL20HaBKvGR',
					text : 'LogkR43c97nPbX0I',
				),
			),
			bot_inline_placeholder : '6QhC9WPAEvSy3DMJ',
			lang_code : 'Ifuw5CEbg8Vd3AJR',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 48,
			color : $client->peerColor(
				color : 44,
				background_emoji_id : -2619366427645344226,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : 1215591987345082820,
			),
			bot_active_users : 40,
			bot_verification_icon : -3917847158027116991,
			send_paid_messages_stars : 4797269737901969933,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8623793193530438174,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5988589199953506827,
			title : 'ZSpgzhtXaUNi7oEc',
			photo : $client->chatPhotoEmpty(),
			participants_count : 15,
			date : 91,
			version : 90,
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
				until_date : 36,
			),
		),
		$client->chatForbidden(
			id : -2484532249336798317,
			title : 'gLEasPI1cjXTYGNw',
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
			id : -7911838745103017336,
			access_hash : -7329152353135820048,
			title : '1x3qr4hEaFnZjf5L',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 79,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UbqOGLDfTwgoXQry',
					reason : 'YgUfLi9m57ydValW',
					text : 'XoLAFI5kw4EH1t6r',
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
				until_date : 48,
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
			participants_count : 84,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 59,
			color : $client->peerColor(
				color : 12,
				background_emoji_id : 4990606018153007807,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : 2450008830863164741,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 25,
			subscription_until_date : 5,
			bot_verification_icon : -5556579153746220544,
			send_paid_messages_stars : -3584199084007342027,
			linked_monoforum_id : -4117239412474767740,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6661031612756178139,
			access_hash : 236523615732262043,
			title : 'ftBS1JnhP6yN0j34',
			until_date : 60,
		),
	),
	date : 17,
	seq : 4,
);
```