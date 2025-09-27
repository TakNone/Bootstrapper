# updatesCombined

**Description** : *Constructor for a group of updates*

**Layer** : 216

```tl
updatesCombined#725b04c3 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq_start:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq_start</mark> | [`int`](type/int) | Value seq for the earliest update in a group |
| <mark>seq</mark> | [`int`](type/int) | Value seq for the latest update in a group |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updatesCombined(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 100,
				peer_id : $client->peerUser(...),
			),
			pts : 0,
			pts_count : 46,
		),
		$client->updateMessageID(
			id : 34,
			random_id : -6182256650280760869,
		),
		$client->updateDeleteMessages(
			messages : array(62),
			pts : 18,
			pts_count : 53,
		),
		$client->updateUserTyping(
			user_id : -906133574572207950,
			top_msg_id : 3,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 2095220386267059396,
			from_id : $client->peerUser(
				user_id : -7260707695637693204,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -2388463793149961509,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 1761253235239909683,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 5794042275998444918,
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
			date : 68,
			device : '5CSzEtdWeP8c7oQg',
			location : '0yRriqxnmHw2l6XD',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 1785088090338350331,
				chat_id : 99,
				date : 47,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 66,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 46,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 16,
			),
			date : 70,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 76,
			max_date : 31,
			date : 29,
		),
		$client->updateChatParticipantAdd(
			chat_id : 821442961781553594,
			user_id : -6697235862410067642,
			inviter_id : 1730739288973245274,
			date : 20,
			version : 69,
		),
		$client->updateChatParticipantDelete(
			chat_id : -8953980092284596859,
			user_id : -75524553329255028,
			version : 47,
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
					id : 99,
					ip_address : '127.0.0.1',
					port : 7,
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
				mute_until : 76,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 88,
			type : 'YilJWPveyBZ9MSK2',
			message : 'fhJBRAKsc9C3nqzF',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 12,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 97,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 4,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 72,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 86,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 67,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 92,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 42,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 71,
					language : 'Myj3YEAqtRBdrp06',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 15,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 52,
					user_id : -6069097288097048810,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 55,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 22,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 17,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 81,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 83,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 47,
					document_id : 3583313222406733421,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 33,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(1559219214598759040),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(4336374036219819110),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(8226971794806059705),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5953063327576284416),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -7869644735100348078,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 33,
			peer : $client->peerUser(
				user_id : -3508531685962849572,
			),
			top_msg_id : 64,
			max_id : 71,
			still_unread_count : 95,
			pts : 93,
			pts_count : 61,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 2985217015388983335,
			),
			max_id : 92,
			pts : 27,
			pts_count : 14,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 1700261363801854793,
				url : 'https://docs.liveproto.dev',
			),
			pts : 50,
			pts_count : 99,
		),
		$client->updateReadMessagesContents(
			messages : array(1),
			pts : 73,
			pts_count : 27,
			date : 92,
		),
		$client->updateChannelTooLong(
			channel_id : 8979450762508822925,
			pts : 19,
		),
		$client->updateChannel(
			channel_id : -8393569086349463182,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 34,
				peer_id : $client->peerUser(...),
			),
			pts : 60,
			pts_count : 66,
		),
		$client->updateReadChannelInbox(
			folder_id : 8,
			channel_id : -4137511574267015595,
			max_id : 21,
			still_unread_count : 10,
			pts : 5,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -6006693039192642231,
			messages : array(74),
			pts : 70,
			pts_count : 12,
		),
		$client->updateChannelMessageViews(
			channel_id : 5351011843484804884,
			id : 22,
			views : 54,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 3720265815461058380,
			user_id : 7144800932938077428,
			is_admin : true,
			version : 76,
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
			order : array(3637096952456215662),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -8529440788353307909,
			user_id : -7801466600109647704,
			query : 'Dyl1VYfOasmqiebU',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'VnSd39AxN0mROLyM',
		),
		$client->updateBotInlineSend(
			user_id : -2442254188860861242,
			query : 'uW5PSjUDyBqmn2zl',
			geo : $client->geoPointEmpty(),
			id : 'wG0ZAW6vr3bMEiBS',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 4,
				id : -5541367337863355726,
				access_hash : 1404400751612505475,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 87,
				peer_id : $client->peerUser(...),
			),
			pts : 99,
			pts_count : 29,
		),
		$client->updateBotCallbackQuery(
			query_id : -4593320016234594035,
			user_id : 7798206669060104722,
			peer : $client->peerUser(
				user_id : 8896359581316400583,
			),
			msg_id : 25,
			chat_instance : 8727798306980975944,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'vUjgebCX8y3qNOQw',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 51,
				peer_id : $client->peerUser(...),
			),
			pts : 14,
			pts_count : 53,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -4072822313413106824,
			user_id : -5623014823649019012,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 60,
				id : 4345432973941176810,
				access_hash : -7017710201294025514,
			),
			chat_instance : 8368363619658501019,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'Xk5uUfLVbwlDaQFr',
		),
		$client->updateReadChannelOutbox(
			channel_id : 7665805369269926902,
			max_id : 12,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 6688676698415921067,
			),
			top_msg_id : 46,
			saved_peer_id : $client->peerUser(
				user_id : 6781991575091314830,
			),
			draft : $client->draftMessageEmpty(
				date : 72,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 2071300851344267388,
			webpage : $client->webPageEmpty(
				id : 8671413754060892816,
				url : 'https://docs.liveproto.dev',
			),
			pts : 23,
			pts_count : 2,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 81,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 53,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 54,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'sykp3N7Bv8zefdc9',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 263288768269518079,
			data : $client->dataJSON(
				data : 'BmItkUHO0b4QCSEL',
			),
			timeout : 7,
		),
		$client->updateBotShippingQuery(
			query_id : -4381738361402693307,
			user_id : -710812291631966832,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : '31ZUOCrWKIR0aecd',
				street_line2 : 'v4cqiQ301wkLRfEh',
				city : 'twAcL6emTFJ5lDEx',
				state : 'iEZ12IqkanvJRN7d',
				country_iso2 : 'zkwWH3vQVJdaDUrs',
				post_code : 'f6y8Vqm70PNaZIMT',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 5520766562264918798,
			user_id : 1751056778339227696,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'x4nRGjH1chI78JO9',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'rpChcwDmxiNsnyqV',
			currency : 'vp74uyrCwPcTZAK9',
			total_amount : -3710348740673640762,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -3560640177878498130,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'QyaNe4WfpLvnlsqG',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'dhLcvbR5CIYExnMX',
				from_version : 96,
				version : 3,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -6608702773393531939,
			top_msg_id : 75,
			saved_peer_id : $client->peerUser(
				user_id : -1851819441895560071,
			),
			messages : array(89),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 5256330555960721827,
			available_min_id : 74,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -8296435145936187722,
			),
		),
		$client->updateMessagePoll(
			poll_id : 6090238396079642395,
			poll : $client->poll(
				id : -6169184349589348815,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 25,
				close_date : 48,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 69,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'OlkRmZqeQgJorPx4',
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
				user_id : 2846911982019478804,
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
				until_date : 94,
			),
			version : 27,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 95,
				),
			),
			pts : 93,
			pts_count : 1,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 4596016245631539424,
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
				geo_distance : 87,
				request_chat_title : 'WQwMdhgvPaTI83mH',
				request_chat_date : 38,
				business_bot_id : -214710524338132687,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -2443441261993043703,
				registration_month : 'cFqwmkGDjV4pTtg9',
				phone_country : '+1234567890',
				name_change_date : 73,
				photo_change_date : 23,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 55,
					distance : 55,
				),
				$client->peerSelfLocated(
					expires : 10,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -4787090615722208772,
			),
			messages : array(25),
			sent_messages : array(20),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -1001433646209160267,
				access_hash : 8555346493489760646,
				slug : '9R2w1vlpisITjUO5',
				title : 'ZDeH1iTKOkIlzNuC',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'STdLo2MUsZHDpFKm',
				installs_count : 95,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 6767551673545730927,
			),
			msg_id : 91,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -2755098951977820471,
			peer : $client->peerUser(
				user_id : 2170426489993233623,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 44,
		),
		$client->updateDialogFilter(
			id : 80,
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
				id : 28,
				title : $client->textWithEntities(...),
				emoticon : '9yeEzIOf5tpq4xis',
				color : 42,
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
			order : array(14),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -4360544349478693476,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -8840044041695645078,
			id : 2,
			forwards : 0,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -859622273662447802,
			top_msg_id : 37,
			read_max_id : 93,
			broadcast_id : -1751951565210533589,
			broadcast_post : 32,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -5088592880540810252,
			top_msg_id : 34,
			read_max_id : 54,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -6302614702351681491,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 1778500189252446168,
			top_msg_id : 84,
			from_id : $client->peerUser(
				user_id : -4874978357811260456,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 5834623387688446875,
			),
			messages : array(6),
			pts : 6,
			pts_count : 99,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 837754990136441707,
			messages : array(1),
			pts : 43,
			pts_count : 69,
		),
		$client->updateChat(
			chat_id : 333541888911077328,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -7228970398000722594,
				access_hash : -6142046067045858084,
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
					date : 49,
					active_date : 86,
					source : 30,
					volume : 21,
					about : 'g5YPONeubtBGrSnT',
					raise_hand_rating : 3097200358474887657,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 98,
		),
		$client->updateGroupCall(
			chat_id : -7830595762890400725,
			call : $client->groupCallDiscarded(
				id : 2160473656943270871,
				access_hash : -1896291859439010112,
				duration : 96,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -5312356888397975190,
			),
			ttl_period : 72,
		),
		$client->updateChatParticipant(
			chat_id : 2614598678455753316,
			date : 38,
			actor_id : 7741751588583719376,
			user_id : -6242949338130721192,
			prev_participant : $client->chatParticipant(
				user_id : 6108988264072827840,
				inviter_id : 7374306113638609978,
				date : 52,
			),
			new_participant : $client->chatParticipant(
				user_id : 267941352182876278,
				inviter_id : -7521397623725772698,
				date : 30,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'pWs0kzHa9Z7PeQDd',
				admin_id : -5764220269721490990,
				date : 7,
				start_date : 4,
				expire_date : 30,
				usage_limit : 7,
				usage : 76,
				requested : 81,
				subscription_expired : 71,
				title : 'w5Zc4GynzjIeFJCb',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 94,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -6262563565798997942,
			date : 61,
			actor_id : -4866328134208218351,
			user_id : -607500675704440257,
			prev_participant : $client->channelParticipant(
				user_id : -4539175522490394529,
				date : 84,
				subscription_until_date : 11,
			),
			new_participant : $client->channelParticipant(
				user_id : -776935322029086978,
				date : 53,
				subscription_until_date : 26,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Zm0kOiJB1EGbHMsT',
				admin_id : -5364381148394686145,
				date : 11,
				start_date : 95,
				expire_date : 82,
				usage_limit : 91,
				usage : 77,
				requested : 92,
				subscription_expired : 3,
				title : 'pgsvYHlwO6TMAJFW',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 6,
		),
		$client->updateBotStopped(
			user_id : -7540156708840114500,
			date : 17,
			stopped : true,
			qts : 23,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : '7lcnRVOe3wam4Ck6',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -166114497466148876,
			),
			bot_id : 8366509583231110615,
			commands : array(
				$client->botCommand(
					command : 'g9MGjq3C7UiIVvJF',
					description : 'tmKTp31jiqvaZgDS',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -6360108242621571273,
			),
			requests_pending : 37,
			recent_requesters : array(-7525544838343753733),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -7345522910816722012,
			),
			date : 70,
			user_id : -531787847297609636,
			about : 'nATZOXfIJctySM4h',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'WQUFOuYErGTHNqIh',
				admin_id : 7029667944323990032,
				date : 50,
				start_date : 22,
				expire_date : 17,
				usage_limit : 46,
				usage : 11,
				requested : 80,
				subscription_expired : 16,
				title : 'N02vZlXk6RyxPVgj',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 97,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 333328907697336496,
			),
			msg_id : 60,
			top_msg_id : 80,
			saved_peer_id : $client->peerUser(
				user_id : -1782660256397209586,
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
			query_id : 7327028542668304322,
		),
		$client->updateBotMenuButton(
			bot_id : 2885888034784025945,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -398217997219461663,
			),
			msg_id : 34,
			transcription_id : -1686379004204703567,
			text : 'nc9OI04oYT7sBb6G',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -443166130018706742,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 4884480152696842606,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 2776133568036086742,
			),
			msg_id : 49,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 48,
					h : 11,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 66,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 683240179385658100,
			topic_id : 29,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 4752222480000273844,
			order : array(66),
		),
		$client->updateUser(
			user_id : -3485928548708874999,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 2567709538980764407,
			),
			story : $client->storyItemDeleted(
				id : 35,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -4397448504226236061,
			),
			max_id : 30,
		),
		$client->updateStoryID(
			id : 89,
			random_id : 1383634754517696649,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 75,
				cooldown_until_date : 28,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -2916998993798217645,
			),
			story_id : 78,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -3067448209586976711,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'jgUL5iY6ztJEphca',
				user_id : 3629321127306242318,
				giveaway_msg_id : 71,
				date : 16,
				expires : 10,
				used_gift_slug : 'VoWB53aiH1XhADbE',
				multiplier : 62,
				stars : 5602358522976352255,
			),
			qts : 5,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 1872013100779421444,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -421510068596412253,
			),
			wallpaper : $client->wallPaper(
				id : -5949509872696770447,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -611447826897735433,
				slug : 'Pp3K01ervIoYzQTm',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -7244318983036840378,
			),
			msg_id : 10,
			date : 61,
			actor : $client->peerUser(
				user_id : 8323188237800538580,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'ODLfXodAsPhEiaJS',
				),
				$client->reactionCustomEmoji(
					document_id : 3995825382176847544,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'jc6nYAzOUiCbkHKL',
				),
				$client->reactionCustomEmoji(
					document_id : 4013989679462654125,
				),
				$client->reactionPaid(),
			),
			qts : 9,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 7066422737401423464,
			),
			msg_id : 67,
			date : 18,
			reactions : array(
				$client->reactionCount(
					chosen_order : 70,
					reaction : $client->reactionEmpty(...),
					count : 46,
				),
			),
			qts : 94,
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
					folder_id : 90,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'YKop0GFuUZThayzj',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 57,
					shortcut : 'G7vcK42APqNSso6X',
					top_message : 100,
					count : 37,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 29,
				shortcut : 'Pby5eVxMpEDguNiY',
				top_message : 48,
				count : 90,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 39,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 57,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 61,
			messages : array(4),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'vqKUXuJxewZgMQPr',
				user_id : -4434074912245423977,
				dc_id : 52,
				date : 63,
				rights : $client->businessBotRights(...),
			),
			qts : 95,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 't0xa8hDYBd4FIv3S',
			message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 33,
				peer_id : $client->peerUser(...),
			),
			qts : 74,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'yqCAc36nej7Bas9o',
			message : $client->messageEmpty(
				id : 7,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 2,
				peer_id : $client->peerUser(...),
			),
			qts : 84,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'VG7AabtH2mFXTj4g',
			peer : $client->peerUser(
				user_id : 7137960232792049767,
			),
			messages : array(55),
			qts : 1,
		),
		$client->updateNewStoryReaction(
			story_id : 71,
			peer : $client->peerUser(
				user_id : -4197428901395890381,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 2425951892344945043,
				nanos : 33,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -390833564163282682,
			user_id : -5591253797085386286,
			connection_id : '5PYbpB2a078sOrni',
			message : $client->messageEmpty(
				id : 40,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 49,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 192498604824921109,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 9071567006905270059,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 45,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -2645046062133312054,
			payload : '0uKxReh9jasvkOqB',
			qts : 19,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 64,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 7638391421340160483,
				access_hash : -4456397840876170606,
			),
			sub_chain_id : 33,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 82,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -6686523243028030879,
			saved_peer_id : $client->peerUser(
				user_id : -9068486025605399722,
			),
			read_max_id : 93,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -1406071854531144230,
			saved_peer_id : $client->peerUser(
				user_id : -1822714836418561714,
			),
			read_max_id : 80,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -594513030020682899,
			saved_peer_id : $client->peerUser(
				user_id : 2122631889928290665,
			),
		),
		$client->updatePinnedForumTopic(
			pinned : 32,
			peer : $client->peerUser(
				user_id : 3521495926065759531,
			),
			topic_id : 75,
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 3963995127018323237,
				access_hash : -612354364889297337,
			),
			from_id : $client->peerUser(
				user_id : 7971885626403322353,
			),
			random_id : 3959336132542898582,
			message : $client->textWithEntities(
				text : 'kdYWrZzCM73L8DwK',
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
			transcription_id : -572647601345484787,
			text : 'H8k5FwQYhyju9iSp',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -8232313020023039837,
			payload : '5Fie0LpOPobRBHDq',
			until_date : 9,
			qts : 38,
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 5643570315247227495,
				access_hash : 7177707913221441525,
			),
			from_id : $client->peerUser(
				user_id : -5219194159107513471,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 2328297880956825926,
			),
			order : array(42),
		),
	),
	users : array(
		$client->userEmpty(
			id : -2451051432106274840,
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
			id : 879506668227450851,
			access_hash : 5777038719908626735,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 79,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UWMKcVidD9NGhnjS',
					reason : 'kTIdlV2WxRFvMPYq',
					text : 'KrQM1mJz3lXPOjuY',
				),
			),
			bot_inline_placeholder : 'lg9hsr7xLqY51bfJ',
			lang_code : 'u0V2EDgMGeY8L9s3',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 85,
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -4235536687761944589,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : -4747221486451045535,
			),
			bot_active_users : 70,
			bot_verification_icon : 6458341587823490314,
			send_paid_messages_stars : -5144414322612114059,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8360951169410179271,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -306074494643881909,
			title : 'DlG7gvPUXBJNtCim',
			photo : $client->chatPhotoEmpty(),
			participants_count : 50,
			date : 16,
			version : 29,
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
				until_date : 1,
			),
		),
		$client->chatForbidden(
			id : -7393231514063042568,
			title : 'vRKagQwWByoMV7SE',
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
			id : -3101039434226961296,
			access_hash : -4759446785128200344,
			title : 'BHwesKZkiWMfONPJ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'i4Pof6uEHsxgRym2',
					reason : 'ApoF61JSbVdY2i7r',
					text : 'aqtURfvyWJ8gzABp',
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
				until_date : 0,
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
				until_date : 1,
			),
			participants_count : 6,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 65,
			color : $client->peerColor(
				color : 20,
				background_emoji_id : -1161425824884588696,
			),
			profile_color : $client->peerColor(
				color : 21,
				background_emoji_id : 4739319386704929588,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 1,
			subscription_until_date : 51,
			bot_verification_icon : 3931990826011524783,
			send_paid_messages_stars : -990638210384195677,
			linked_monoforum_id : -4916917643153839558,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5961484720656178072,
			access_hash : 1599714109007906864,
			title : 'gedhcOIzDY813pSC',
			until_date : 26,
		),
	),
	date : 24,
	seq_start : 42,
	seq : 74,
);
```