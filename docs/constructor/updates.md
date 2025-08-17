# updates

**Description** : *Full constructor of updates*

**Layer** : 211

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
				id : 32,
				peer_id : $client->peerUser(...),
			),
			pts : 33,
			pts_count : 50,
		),
		$client->updateMessageID(
			id : 78,
			random_id : -3036268420267568512,
		),
		$client->updateDeleteMessages(
			messages : array(49),
			pts : 52,
			pts_count : 83,
		),
		$client->updateUserTyping(
			user_id : -3637428935637428255,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 7696290989803440624,
			from_id : $client->peerUser(
				user_id : 2432263136812473630,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -6706472202804525764,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -1187135372220698997,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -5569554943293278299,
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
			hash : 6351177300024313353,
			date : 65,
			device : 'aH8dEbOwu3cq9jZm',
			location : 'iTDlCcFZxtbMavXN',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 3524409929376225915,
				chat_id : 18,
				date : 84,
				bytes : '8??)LiveProto?BZ',
				file : $client->encryptedFileEmpty(...),
			),
			qts : 60,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 10,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 56,
			),
			date : 58,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 98,
			max_date : 58,
			date : 35,
		),
		$client->updateChatParticipantAdd(
			chat_id : 3531486291524140756,
			user_id : 846080384147853845,
			inviter_id : 3736891541828534286,
			date : 71,
			version : 66,
		),
		$client->updateChatParticipantDelete(
			chat_id : 1886781093387625624,
			user_id : 3686005629668738137,
			version : 8,
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
					id : 12,
					ip_address : '127.0.0.1',
					port : 85,
					secret : '߼?CLiveProto??(',
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : $client->boolFalse(...),
				silent : $client->boolFalse(...),
				mute_until : 5,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : $client->boolFalse(...),
				stories_hide_sender : $client->boolFalse(...),
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 45,
			type : 'XPd7tzUwNi9p36bA',
			message : 'NEcU3HOlXVLmftje',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 90,
					length : 89,
				),
				$client->messageEntityMention(
					offset : 38,
					length : 18,
				),
				$client->messageEntityHashtag(
					offset : 51,
					length : 26,
				),
				$client->messageEntityBotCommand(
					offset : 33,
					length : 29,
				),
				$client->messageEntityUrl(
					offset : 6,
					length : 59,
				),
				$client->messageEntityEmail(
					offset : 82,
					length : 11,
				),
				$client->messageEntityBold(
					offset : 24,
					length : 12,
				),
				$client->messageEntityItalic(
					offset : 4,
					length : 87,
				),
				$client->messageEntityCode(
					offset : 98,
					length : 85,
				),
				$client->messageEntityPre(
					offset : 81,
					length : 83,
					language : 'oznT6bRSgAfVJD8H',
				),
				$client->messageEntityTextUrl(
					offset : 20,
					length : 74,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 74,
					length : 33,
					user_id : -3079624036922608866,
				),
				$client->inputMessageEntityMentionName(
					offset : 57,
					length : 66,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 91,
					length : 80,
				),
				$client->messageEntityCashtag(
					offset : 49,
					length : 72,
				),
				$client->messageEntityUnderline(
					offset : 75,
					length : 26,
				),
				$client->messageEntityStrike(
					offset : 45,
					length : 17,
				),
				$client->messageEntityBankCard(
					offset : 92,
					length : 37,
				),
				$client->messageEntitySpoiler(
					offset : 54,
					length : 5,
				),
				$client->messageEntityCustomEmoji(
					offset : 82,
					length : 69,
					document_id : -8892236195616512094,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 29,
					length : 68,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(3806424226003185192),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-4306358804346316932),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(1020856870554799305),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-7999952729749262744),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -3255616411669261817,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 94,
			peer : $client->peerUser(
				user_id : -5962142526190817363,
			),
			max_id : 68,
			still_unread_count : 100,
			pts : 53,
			pts_count : 33,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -3796415248338600067,
			),
			max_id : 61,
			pts : 33,
			pts_count : 69,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 5419108078902026310,
				url : 'https://docs.liveproto.dev',
			),
			pts : 50,
			pts_count : 11,
		),
		$client->updateReadMessagesContents(
			messages : array(56),
			pts : 22,
			pts_count : 97,
			date : 49,
		),
		$client->updateChannelTooLong(
			channel_id : 1469029859900954172,
			pts : 29,
		),
		$client->updateChannel(
			channel_id : 6486788375817161069,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(...),
			),
			pts : 45,
			pts_count : 78,
		),
		$client->updateReadChannelInbox(
			folder_id : 82,
			channel_id : -2816016665001852298,
			max_id : 66,
			still_unread_count : 20,
			pts : 96,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -2098558051765738854,
			messages : array(74),
			pts : 58,
			pts_count : 18,
		),
		$client->updateChannelMessageViews(
			channel_id : 5806287241101452539,
			id : 42,
			views : 59,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -4262062960581915297,
			user_id : 9172126947096833036,
			is_admin : $client->boolFalse(),
			version : 32,
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
			order : array(8435771953156118694),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 2117945267451754415,
			user_id : 599379434082477802,
			query : 'pj3x57lDEwcFrPqv',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'lXvynegJF7uSCkfp',
		),
		$client->updateBotInlineSend(
			user_id : 6660033188902286504,
			query : 'i9mXy7wxU6TYHGr4',
			geo : $client->geoPointEmpty(),
			id : 'f8NVaPKwdump4vUJ',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 81,
				id : 6389436582669508428,
				access_hash : -568137064932201993,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 69,
				peer_id : $client->peerUser(...),
			),
			pts : 18,
			pts_count : 42,
		),
		$client->updateBotCallbackQuery(
			query_id : -2430484558394490468,
			user_id : 4462392028280804777,
			peer : $client->peerUser(
				user_id : 6383406529115349125,
			),
			msg_id : 13,
			chat_instance : 4112418897252755212,
			data : '????LiveProto/?f^7',
			game_short_name : 'SGCoBNWrw5ZbtdhY',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 49,
				peer_id : $client->peerUser(...),
			),
			pts : 73,
			pts_count : 58,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -2870762496677902900,
			user_id : -6803335524752331315,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 15,
				id : -7189310317262303552,
				access_hash : -906600015722079739,
			),
			chat_instance : 6239420686197866844,
			data : '?%???LiveProto]?F&1',
			game_short_name : 'LzvBl5nfAIQi1YwZ',
		),
		$client->updateReadChannelOutbox(
			channel_id : -2468736181061033210,
			max_id : 9,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -2093301800851679581,
			),
			top_msg_id : 48,
			saved_peer_id : $client->peerUser(
				user_id : -8674695630554456368,
			),
			draft : $client->draftMessageEmpty(
				date : 42,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -6855754242139835820,
			webpage : $client->webPageEmpty(
				id : -1148470346120401675,
				url : 'https://docs.liveproto.dev',
			),
			pts : 56,
			pts_count : 99,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 37,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 94,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 10,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'uaXnE0tKOLlBPyz7',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -5576880598612900516,
			data : $client->dataJSON(
				data : '1QGDt3nNgWZkehbf',
			),
			timeout : 25,
		),
		$client->updateBotShippingQuery(
			query_id : 3774040634801306643,
			user_id : -1072799244658037267,
			payload : '?%5?LiveProtosr{[',
			shipping_address : $client->postAddress(
				street_line1 : 'yXtu25mlNOUV6ZDP',
				street_line2 : 'G6YVBKR2A8xSPgkv',
				city : 'APq5Wu4aKS97Dgim',
				state : 'imot27pDMn1JWLcl',
				country_iso2 : 'of4sKTtG15LH3pw2',
				post_code : 'I5DRLdutjGrvBkPX',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 5869041455709380400,
			user_id : -1892970791985340538,
			payload : '??\'L?LiveProto?UEE',
			info : $client->paymentRequestedInfo(
				name : 'PDyIfa0eElBUjw1K',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'TGeMLXpvZrsJcNO6',
			currency : '6iC7HXZQTN3xKwEg',
			total_amount : -5116754300899562972,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -670096759239907409,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'ne8uTjRXEapGZS9g',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'N5fmqRkzp6vM0i8g',
				from_version : 24,
				version : 100,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -7384998627453946668,
			top_msg_id : 22,
			saved_peer_id : $client->peerUser(
				user_id : -728312055456091206,
			),
			messages : array(100),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 3671788293935345299,
			available_min_id : 27,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -1209273928373092049,
			),
		),
		$client->updateMessagePoll(
			poll_id : 712262810582206603,
			poll : $client->poll(
				id : -1954180434443810575,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 69,
				close_date : 42,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 32,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'bSnpyLGWTE4CjrJ2',
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
				user_id : 5174905943608944289,
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
				until_date : 93,
			),
			version : 33,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 62,
				),
			),
			pts : 59,
			pts_count : 37,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -177649328498842087,
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
				geo_distance : 77,
				request_chat_title : 'dsq0FSYvIQ4AOj2X',
				request_chat_date : 1,
				business_bot_id : 7934149886436717030,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 416548596938572764,
				registration_month : 'E8dIt1kWcbYBTqm9',
				phone_country : '+1234567890',
				name_change_date : 51,
				photo_change_date : 92,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 72,
					distance : 56,
				),
				$client->peerSelfLocated(
					expires : 65,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 61,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 1465747666712958984,
			),
			messages : array(32),
			sent_messages : array(42),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -4414344973386626450,
				access_hash : 8025111807960204702,
				slug : 'xyYb1wLX4R95KHna',
				title : 't8qfxDr0pyGKdQn6',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'lnkcCXYZOPIi0two',
				installs_count : 41,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 7146212270369756620,
			),
			msg_id : 95,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 618727004296585331,
			peer : $client->peerUser(
				user_id : -365884369913719923,
			),
			options : array('?;??LiveProto?K??'),
			qts : 11,
		),
		$client->updateDialogFilter(
			id : 84,
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
				id : 33,
				title : $client->textWithEntities(...),
				emoticon : 'N6oDglUnxseLdtWf',
				color : 66,
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
			order : array(31),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -1542340265664691836,
			data : 'ʍ??`LiveProto?]$??',
		),
		$client->updateChannelMessageForwards(
			channel_id : 7070580961739474656,
			id : 77,
			forwards : 55,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -3423743679967266988,
			top_msg_id : 5,
			read_max_id : 15,
			broadcast_id : 7362248877998656968,
			broadcast_post : 53,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -8412069336235333196,
			top_msg_id : 18,
			read_max_id : 33,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 63565864683784088,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -1305877125272880354,
			top_msg_id : 9,
			from_id : $client->peerUser(
				user_id : 1187398037402409322,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -7797179048054956669,
			),
			messages : array(31),
			pts : 89,
			pts_count : 31,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -7598671248200912398,
			messages : array(80),
			pts : 22,
			pts_count : 99,
		),
		$client->updateChat(
			chat_id : 1969720598060702223,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 7850513227575472144,
				access_hash : 143582299704500875,
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
					date : 27,
					active_date : 56,
					source : 79,
					volume : 23,
					about : '5BTC8If7AQELtnNh',
					raise_hand_rating : 8323891643414877,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 44,
		),
		$client->updateGroupCall(
			chat_id : 6061664598113903306,
			call : $client->groupCallDiscarded(
				id : 6676140434797788493,
				access_hash : 4720324358687191606,
				duration : 70,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -4162755616596482374,
			),
			ttl_period : 57,
		),
		$client->updateChatParticipant(
			chat_id : 8105124799247607325,
			date : 81,
			actor_id : -4268290893945465282,
			user_id : 5592164508599380981,
			prev_participant : $client->chatParticipant(
				user_id : -1028205625043177818,
				inviter_id : -6670002301699381378,
				date : 82,
			),
			new_participant : $client->chatParticipant(
				user_id : 5271934597495631851,
				inviter_id : 1733579899543666292,
				date : 84,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'YsqQJy0IoNRe3ThE',
				admin_id : 3844832966431617326,
				date : 94,
				start_date : 0,
				expire_date : 68,
				usage_limit : 19,
				usage : 27,
				requested : 5,
				subscription_expired : 17,
				title : 'kzQPViMdOYJlqGnm',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 85,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 8069768123736377118,
			date : 32,
			actor_id : -7659390380032981711,
			user_id : -678882954941518210,
			prev_participant : $client->channelParticipant(
				user_id : -4307527579760178361,
				date : 61,
				subscription_until_date : 31,
			),
			new_participant : $client->channelParticipant(
				user_id : 3794413586311061587,
				date : 21,
				subscription_until_date : 60,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '9LsZ3YIct7GyU8D4',
				admin_id : 8998985871486695893,
				date : 90,
				start_date : 42,
				expire_date : 52,
				usage_limit : 7,
				usage : 61,
				requested : 37,
				subscription_expired : 14,
				title : 'wxoKIXEYzbsTVWmQ',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 17,
		),
		$client->updateBotStopped(
			user_id : 7228416574827640979,
			date : 19,
			stopped : $client->boolFalse(),
			qts : 80,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'EAZ64MYSPf5L2rig',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 2099505333399142207,
			),
			bot_id : -6759828534780369201,
			commands : array(
				$client->botCommand(
					command : 'Yp0QyNjWfgEkvFBV',
					description : 'MPFVKJksiYu0U6qh',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 6739309499726731171,
			),
			requests_pending : 10,
			recent_requesters : array(-1455299845256384444),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 4880319406640747349,
			),
			date : 58,
			user_id : 2888375407532695161,
			about : '4I2Nd3AX0qfV1FTU',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'V65HDLK4Mqumv3yY',
				admin_id : -6905797003559087811,
				date : 59,
				start_date : 75,
				expire_date : 44,
				usage_limit : 81,
				usage : 27,
				requested : 51,
				subscription_expired : 6,
				title : 'PiWsUwXYZSBLmhdb',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 34,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 5882849441505162988,
			),
			msg_id : 49,
			top_msg_id : 13,
			saved_peer_id : $client->peerUser(
				user_id : 6082343919354870022,
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
			query_id : 7611945009158563650,
		),
		$client->updateBotMenuButton(
			bot_id : 1469502795718907108,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 7587053279205233526,
			),
			msg_id : 52,
			transcription_id : -7219559299829273374,
			text : 'DlLMweZQNxc2uyGO',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -3164634313628346941,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 8171400776446800238,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 8635927725445520070,
			),
			msg_id : 67,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 17,
					h : 55,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 21,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 7445037794956275922,
			topic_id : 18,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 2459508658148020628,
			order : array(40),
		),
		$client->updateUser(
			user_id : -5281405863441768955,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 3632058130774193777,
			),
			story : $client->storyItemDeleted(
				id : 48,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -7011657978614245389,
			),
			max_id : 21,
		),
		$client->updateStoryID(
			id : 37,
			random_id : 6698338176487066345,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 94,
				cooldown_until_date : 10,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -4925814695651465037,
			),
			story_id : 87,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 7071832014744897750,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'WhCIFNdlgXmAzO4S',
				user_id : -7734698831871222862,
				giveaway_msg_id : 58,
				date : 39,
				expires : 56,
				used_gift_slug : 'Ni1GPx3uHF96WsXq',
				multiplier : 76,
				stars : 6557680912709949291,
			),
			qts : 4,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -7082537306827782987,
			enabled : $client->boolFalse(),
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -1530829792040721193,
			),
			wallpaper : $client->wallPaper(
				id : 5368986832801008201,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 2054361377527855317,
				slug : 'QHpI0wlArcJGLSFy',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -3063506575730280362,
			),
			msg_id : 31,
			date : 81,
			actor : $client->peerUser(
				user_id : 3579004691500186785,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'TuYRre7ljBZtQfSc',
				),
				$client->reactionCustomEmoji(
					document_id : 375178135795795709,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '7sCNOJtPTXZae6no',
				),
				$client->reactionCustomEmoji(
					document_id : -749422268452045895,
				),
				$client->reactionPaid(),
			),
			qts : 88,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 1867673449341226632,
			),
			msg_id : 8,
			date : 74,
			reactions : array(
				$client->reactionCount(
					chosen_order : 16,
					reaction : $client->reactionEmpty(...),
					count : 15,
				),
			),
			qts : 20,
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
					folder_id : 66,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'GO4ShgdpsXiytNTu',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 47,
					shortcut : '8p0tduGThPoD1XKc',
					top_message : 88,
					count : 95,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 39,
				shortcut : 'L8Kh4youfTR0x1Hi',
				top_message : 5,
				count : 91,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 50,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 51,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 14,
			messages : array(38),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'mi3LAJITlbG5QkhO',
				user_id : 6867404973091131616,
				dc_id : 92,
				date : 100,
				rights : $client->businessBotRights(...),
			),
			qts : 24,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'izfscISKed4X53xE',
			message : $client->messageEmpty(
				id : 11,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 66,
				peer_id : $client->peerUser(...),
			),
			qts : 45,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'jUYhqT5eSzBJb3Kp',
			message : $client->messageEmpty(
				id : 0,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(...),
			),
			qts : 2,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'A9igDXjWNznutCmc',
			peer : $client->peerUser(
				user_id : 2740695895418117918,
			),
			messages : array(2),
			qts : 4,
		),
		$client->updateNewStoryReaction(
			story_id : 24,
			peer : $client->peerUser(
				user_id : 133379686871286171,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 2646741978104715050,
				nanos : 4,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -5458227257812646319,
			user_id : -707269255483606925,
			connection_id : 'BuIQ4jCXbraiGHV8',
			message : $client->messageEmpty(
				id : 27,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -7991441736285196041,
			data : 'K?P-?LiveProto??$u',
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -5612273465714497003,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 26,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 6334085061037113848,
			payload : 'TRkC0oeQZ9qGUisJ',
			qts : 62,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 59,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 3387447580184173928,
				access_hash : -7108071258754968886,
			),
			sub_chain_id : 76,
			blocks : array('}q@IBLiveProto??;?'),
			next_offset : 0,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -5873886195747639204,
			saved_peer_id : $client->peerUser(
				user_id : 8054781222988039384,
			),
			read_max_id : 85,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 8690736517885263705,
			saved_peer_id : $client->peerUser(
				user_id : -7582696998922033241,
			),
			read_max_id : 44,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -8343423757626064278,
			saved_peer_id : $client->peerUser(
				user_id : -8704035527050523519,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -4512695022200232322,
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
			id : 1587733387764587512,
			access_hash : -2190985132332832608,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 76,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TEF5PYB1lKqWzfci',
					reason : 'zQSx3602JORnIjHa',
					text : 'mREhd09UoYVbGJMB',
				),
			),
			bot_inline_placeholder : 'unQJ8fhYIyDP0XxL',
			lang_code : 'HE3tK2QhznbkY5Fp',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 76,
			color : $client->peerColor(
				color : 2,
				background_emoji_id : -3907587946090094681,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : -4085492411034245660,
			),
			bot_active_users : 78,
			bot_verification_icon : 1843590300204748110,
			send_paid_messages_stars : -2772536296017977155,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6965807262355175577,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5955056985027339507,
			title : 'a7oxgDUpAmfRC9N0',
			photo : $client->chatPhotoEmpty(),
			participants_count : 51,
			date : 70,
			version : 23,
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
				until_date : 7,
			),
		),
		$client->chatForbidden(
			id : -7770236610040467073,
			title : 'qWG5pDLVKQ8MNc3C',
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
			id : -3381920859312702586,
			access_hash : 9088519318832382510,
			title : 'LXVUDiAkNtnoH4Ba',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BJTU0Z9KbmMs1POz',
					reason : '4EnTPBx5kRC9ZFcK',
					text : 'EUTKrWvzp1aLShde',
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
				until_date : 59,
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
				until_date : 76,
			),
			participants_count : 9,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 18,
			color : $client->peerColor(
				color : 91,
				background_emoji_id : 6904298585996782968,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : 7649278790372869257,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 24,
			subscription_until_date : 16,
			bot_verification_icon : 502437030266933803,
			send_paid_messages_stars : -5357795779421709702,
			linked_monoforum_id : 3930961204665507712,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4065694020847993095,
			access_hash : -3569924396436094413,
			title : 'ibIwPt9g3aWlhAN0',
			until_date : 94,
		),
	),
	date : 32,
	seq : 28,
);
```