# updatesCombined

**Description** : *Constructor for a group of updates*

**Layer** : 225

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
				id : 22,
				peer_id : $client->peerUser(
					user_id : -1040370627939191008,
				),
			),
			pts : 18,
			pts_count : 91,
		),
		$client->updateMessageID(
			id : 62,
			random_id : -2982051316771302062,
		),
		$client->updateDeleteMessages(
			messages : array(32),
			pts : 5,
			pts_count : 2,
		),
		$client->updateUserTyping(
			user_id : -7863624027014025018,
			top_msg_id : 55,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 1315376692479641324,
			from_id : $client->peerUser(
				user_id : -7376078803299762876,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -3340320045106877627,
				self_participant : $client->chatParticipant(
					user_id : 3435074450356598451,
					inviter_id : 4245492866002425819,
					date : 57,
					rank : 'wSDW3JQBrCfRbPne',
				),
			),
		),
		$client->updateUserStatus(
			user_id : -6828263640071676159,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -4730619453197316427,
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
			date : 80,
			device : 'zcv492FuD67h13gZ',
			location : '04DJwdXLgMPZoAv2',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -4778904749000941807,
				chat_id : 36,
				date : 99,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 15,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 80,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 53,
			),
			date : 6,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 91,
			max_date : 68,
			date : 78,
		),
		$client->updateChatParticipantAdd(
			chat_id : -4011320367338361268,
			user_id : -1551459666051465370,
			inviter_id : -2823595056561320461,
			date : 93,
			version : 95,
		),
		$client->updateChatParticipantDelete(
			chat_id : 140135547196000269,
			user_id : 1189673139486583240,
			version : 100,
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
					id : 96,
					ip_address : '127.0.0.1',
					port : 30,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 5906850676860093265,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 25,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 80,
			type : '6Z4bnzpV51xYafiW',
			message : 'RIEdt7ncx3m0hJzB',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 9,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 99,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 36,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 46,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 33,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 0,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 57,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 42,
					language : 'Efwo970rzQiv23Ax',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 93,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 23,
					user_id : -269983157315348831,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 68,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 34,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 81,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 13,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 49,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 43,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 82,
					document_id : -4638177311943063854,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 13,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 5,
					date : 63,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 23,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 13,
					old_text : 'Os1peyPAfuDtEHKU',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 37,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(217827664108988783),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(5859051768891464359),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-6392520612906021248),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-2028822438339434077),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 7049913153178429821,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 91,
			peer : $client->peerUser(
				user_id : -4222226243252983957,
			),
			top_msg_id : 94,
			max_id : 9,
			still_unread_count : 13,
			pts : 61,
			pts_count : 77,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 4576874164332136036,
			),
			max_id : 25,
			pts : 57,
			pts_count : 91,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 7946293150978754761,
				url : 'https://docs.liveproto.dev',
			),
			pts : 94,
			pts_count : 33,
		),
		$client->updateReadMessagesContents(
			messages : array(16),
			pts : 68,
			pts_count : 5,
			date : 66,
		),
		$client->updateChannelTooLong(
			channel_id : -3859795358906823015,
			pts : 61,
		),
		$client->updateChannel(
			channel_id : 4629006017636372908,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 88,
				peer_id : $client->peerUser(
					user_id : 7386641146882383912,
				),
			),
			pts : 94,
			pts_count : 56,
		),
		$client->updateReadChannelInbox(
			folder_id : 2,
			channel_id : 8322172057114292484,
			max_id : 51,
			still_unread_count : 77,
			pts : 38,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -5691322923337452455,
			messages : array(35),
			pts : 15,
			pts_count : 65,
		),
		$client->updateChannelMessageViews(
			channel_id : 989753357400879220,
			id : 31,
			views : 40,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 2005070195824065054,
			user_id : 4934094256685964458,
			is_admin : false,
			version : 38,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 44,
					id : -1875582485927720417,
					access_hash : -4041595103436037851,
					title : 'Sw4eVRX1k3ZGoWFD',
					short_name : 'SQ4YgrzqnP6aH5sI',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 21,
					thumb_version : 5,
					thumb_document_id : -3648963638670998471,
					count : 37,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'BX4yP85NpUZmbQHh',
						documents : array(3348458611432320095),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -777904216205257152,
						keyword : array('gXm9Hqn5xLG1C04d'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -8414650081375532009,
					),
					$client->document(
						id : -3340463499270322648,
						access_hash : -7127512890567717224,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 100,
						mime_type : '41GR68ZfDtmUEwzk',
						size : -164505285155684298,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 43,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(-7105559587563780436),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -6965694590722331401,
			user_id : 9051036068926105227,
			query : '7gSGQdrEekLjhuoY',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'jlnpOArLVQaIc93E',
		),
		$client->updateBotInlineSend(
			user_id : 9096397274535394917,
			query : '3eIVw0k7T8yCrf5E',
			geo : $client->geoPointEmpty(),
			id : 'M1z6bHtcyYv9kGI0',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 50,
				id : 3640508527533096131,
				access_hash : -3313058609701974378,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 32,
				peer_id : $client->peerUser(
					user_id : 8561051371073181774,
				),
			),
			pts : 57,
			pts_count : 54,
		),
		$client->updateBotCallbackQuery(
			query_id : -368762731522512863,
			user_id : -739450170076899422,
			peer : $client->peerUser(
				user_id : 7035238344434012802,
			),
			msg_id : 54,
			chat_instance : -6474440464801008339,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'XKLGoMS1stacAjlJ',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 5,
				peer_id : $client->peerUser(
					user_id : 8003566193924376813,
				),
			),
			pts : 85,
			pts_count : 48,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -6594938472143970108,
			user_id : -626116667178484396,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 51,
				id : -6258453617347829369,
				access_hash : 645318584932489697,
			),
			chat_instance : 3069707414282569473,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'gMYbFqCeisW5EKVU',
		),
		$client->updateReadChannelOutbox(
			channel_id : 4495513984037078949,
			max_id : 8,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 4932160272445978630,
			),
			top_msg_id : 69,
			saved_peer_id : $client->peerUser(
				user_id : -1502058889396290985,
			),
			draft : $client->draftMessageEmpty(
				date : 91,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -6523491248009966946,
			webpage : $client->webPageEmpty(
				id : -8733699831354600663,
				url : 'https://docs.liveproto.dev',
			),
			pts : 52,
			pts_count : 78,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 91,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 4661939577427142415,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 34,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 6984115966253474209,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 67,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'PdcsQqt5fmMGJ6HF',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -2746013888396789139,
			data : $client->dataJSON(
				data : 'Arze8TEUi7DK4wmd',
			),
			timeout : 1,
		),
		$client->updateBotShippingQuery(
			query_id : -609194988251365424,
			user_id : -623039710406228834,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'RODPQ4kdMAKFutlz',
				street_line2 : '1ZopNz5hFUvmsrfi',
				city : '1embVinLT0B85tZX',
				state : 'ecYPEorFi6tf0ubM',
				country_iso2 : 'QhAduDIpEzxnFWj7',
				post_code : 'p1OlBagSxybjIo3Z',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -946532254745713931,
			user_id : 5061059266667442189,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'ZK6PF1gm3EQuM0fi',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'tGkemBxy6YSFu3j2',
					street_line2 : 'SHjU8xh9QnIXqB3l',
					city : 'Bk5VsAPo6KgmZRYX',
					state : 'M1ygH8Li049ZKrNC',
					country_iso2 : 'LGhzY24PukynsHrK',
					post_code : 'MRVWEQgaS9J6GPUO',
				),
			),
			shipping_option_id : 'Aw8INDz91dLPBRZr',
			currency : '5VFaHrANd8thnfqv',
			total_amount : 6787152017995807354,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 3660658557935552217,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'hFfenAMgzE8Q62tT',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'DEvBVUWr3iKupxyS',
				from_version : 81,
				version : 3,
				strings : array(
					$client->langPackString(
						key : 'FpAtL3WZ0GsQ5vTb',
						value : 'lzcFOTI56hXyVYSo',
					),
					$client->langPackStringPluralized(
						key : 'HLwQlD4db9gUf8Aq',
						zero_value : 'NOuncgfldUIsej6a',
						one_value : 'c17HuvPaLzWItmCX',
						two_value : '6MI0KlVR4wkZXFSx',
						few_value : 'tv7bI4MaJBfF5KZD',
						many_value : 'mSjZflQ7hYiotcxA',
						other_value : 'arOG5d6pN2ZWm9hg',
					),
					$client->langPackStringDeleted(
						key : '27HQkKapFobuVDiG',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -9161350971032583745,
			top_msg_id : 4,
			saved_peer_id : $client->peerUser(
				user_id : 4090550927911266877,
			),
			messages : array(91),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 1504908326939337489,
			available_min_id : 19,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -3985874922594569464,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -7893022281713207569,
			),
		),
		$client->updateMessagePoll(
			peer : $client->peerUser(
				user_id : 5752522840798615671,
			),
			msg_id : 33,
			top_msg_id : 47,
			poll_id : -5537430953798872796,
			poll : $client->poll(
				id : -5042040292673364894,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				open_answers : true,
				revoting_disabled : true,
				shuffle_answers : true,
				hide_results_until_close : true,
				creator : true,
				subscribers_only : true,
				question : $client->textWithEntities(
					text : 'xagrPS4EqtcXLTWZ',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						media : $client->messageMediaEmpty(...),
						added_by : $client->peerUser(...),
						date : 12,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 23,
				close_date : 18,
				countries_iso2 : array('MQV4I6gKl23jkTR9'),
				hash : 0,
			),
			results : $client->pollResults(
				min : true,
				has_unread_votes : true,
				can_view_stats : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 4,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 69,
				recent_voters : array(
					$client->peerUser(
						user_id : -5874185696474631998,
					),
					$client->peerChat(
						chat_id : -6409058572030615618,
					),
					$client->peerChannel(
						channel_id : -6536691357101494905,
					),
				),
				solution : 'ae0YF1459NRzsiju',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 42,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 54,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 35,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 51,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 64,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 85,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 8,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 49,
						language : 'IpF4n5UadwTWRz0N',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 56,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : -8171233491759959303,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 72,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 74,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 15,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 96,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 23,
						document_id : 7164704348943516472,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 12,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 1,
						date : 52,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 45,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 14,
						old_text : 'al7IKsCPTOme9uqF',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 73,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -4082977411038789715,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 64,
			),
			version : 8,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -5009343060884467369,
					),
					folder_id : 34,
				),
			),
			pts : 32,
			pts_count : 77,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 2528456259073697464,
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
				geo_distance : 10,
				request_chat_title : 'FHVQru2kLd0xgCPc',
				request_chat_date : 65,
				business_bot_id : -3473770099387879573,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 2093374206000128791,
				registration_month : 'd1WBgueywDTEmA08',
				phone_country : '+1234567890',
				name_change_date : 61,
				photo_change_date : 65,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -4713798713607642789,
					),
					expires : 20,
					distance : 36,
				),
				$client->peerSelfLocated(
					expires : 29,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 62,
				peer_id : $client->peerUser(
					user_id : 4876980614777177672,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 3900344602972593456,
			),
			messages : array(63),
			sent_messages : array(4),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -6471909408216833129,
				access_hash : 8904217953716896219,
				slug : 'GY38A9DwNOCSP7sv',
				title : '42Ii8pRqlMDJC6vN',
				document : $client->documentEmpty(
					id : -2374262619902964339,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 65,
						outbox_accent_color : 87,
						message_colors : array(31),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'oVBAP53aqUnQiW9u',
				installs_count : 57,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 5126382205845067249,
			),
			msg_id : 4,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -2275858460217695644,
			peer : $client->peerUser(
				user_id : 8670257148398731978,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			positions : array(2),
			qts : 23,
		),
		$client->updateDialogFilter(
			id : 95,
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
				id : 37,
				title : $client->textWithEntities(
					text : 'naBli4j79JMvArRK',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				emoticon : 'mXyZ6QJBPKVa4jfo',
				color : 76,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(96),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 1067101263405469115,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -2390842440238887371,
			id : 100,
			forwards : 87,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 5773657314330959873,
			top_msg_id : 9,
			read_max_id : 54,
			broadcast_id : -6561785285549310392,
			broadcast_post : 78,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 6585005977562203246,
			top_msg_id : 18,
			read_max_id : 71,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -4785309596826072242,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -4382349278891878653,
			top_msg_id : 81,
			from_id : $client->peerUser(
				user_id : -6908553238115673352,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 6563864250745336152,
			),
			messages : array(70),
			pts : 98,
			pts_count : 99,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 162395168862845906,
			messages : array(64),
			pts : 88,
			pts_count : 22,
		),
		$client->updateChat(
			chat_id : 5168947550032824149,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -1654482306597244432,
				access_hash : 164387535656396696,
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
					peer : $client->peerUser(
						user_id : 1614648364731891868,
					),
					date : 6,
					active_date : 28,
					source : 14,
					volume : 27,
					about : 'XcFlVs0YIgCvoz5j',
					raise_hand_rating : 7552026894622421140,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'N5Swr4bx0yjcHAlf',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 60,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'KD6xZVdrAlwkconG',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 65,
					),
					paid_stars_total : 7956679237465960179,
				),
			),
			version : 100,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -8842945250811193894,
			),
			call : $client->groupCallDiscarded(
				id : -8906375457089230215,
				access_hash : -6726913360594703959,
				duration : 23,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -2373583547206280836,
			),
			ttl_period : 1,
		),
		$client->updateChatParticipant(
			chat_id : -6300281456014450399,
			date : 5,
			actor_id : 1403707851979448544,
			user_id : -2101061767619696270,
			prev_participant : $client->chatParticipant(
				user_id : 3797437412842856117,
				inviter_id : 8204370678170838851,
				date : 39,
				rank : 'SLbd0mgR84YFnZjt',
			),
			new_participant : $client->chatParticipant(
				user_id : -6979172063795951508,
				inviter_id : 2379395715707699030,
				date : 44,
				rank : 'bxXuDvKIwNrl3hPi',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'RHAmGcpMlJYyQVwB',
				admin_id : 4412849031288640531,
				date : 4,
				start_date : 94,
				expire_date : 67,
				usage_limit : 95,
				usage : 33,
				requested : 62,
				subscription_expired : 22,
				title : 'VuqHOC85pBYJGSyv',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 55,
					amount : 5540761186019053821,
				),
			),
			qts : 67,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 5487337837906627115,
			date : 3,
			actor_id : -5409017533012235600,
			user_id : -3656544042164975520,
			prev_participant : $client->channelParticipant(
				user_id : 8712745455632773398,
				date : 0,
				subscription_until_date : 77,
				rank : 'ALorl8pQzZaqEmVi',
			),
			new_participant : $client->channelParticipant(
				user_id : 1525779617944742789,
				date : 51,
				subscription_until_date : 22,
				rank : '8CbMl4ArQdGy3Hst',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'c4MWDxfKTYrOgoQp',
				admin_id : 2702806701466169680,
				date : 43,
				start_date : 76,
				expire_date : 0,
				usage_limit : 68,
				usage : 41,
				requested : 70,
				subscription_expired : 95,
				title : 'Qb74cjBCF3o1aqNk',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 12,
					amount : 8845456485135139401,
				),
			),
			qts : 26,
		),
		$client->updateBotStopped(
			user_id : 1147595824693490695,
			date : 36,
			stopped : true,
			qts : 99,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'twYhdXp54jJelHaC',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -789743654183897409,
			),
			bot_id : -507316895786061613,
			commands : array(
				$client->botCommand(
					command : 'ubaUPYN7WxwH4AZG',
					description : 'GM3n7Terux8lPpjL',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 3649691325117123926,
			),
			requests_pending : 89,
			recent_requesters : array(-2719029403946326421),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 6208374043468606919,
			),
			date : 92,
			user_id : 7001471967589786114,
			about : 'HuwjNiRrJsSM2EIB',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '1fnNMV2vAKs8EB6c',
				admin_id : 325562900030090823,
				date : 56,
				start_date : 61,
				expire_date : 57,
				usage_limit : 31,
				usage : 24,
				requested : 29,
				subscription_expired : 1,
				title : '5l2WuzYq7C9FOINT',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 33,
					amount : 3285088742355749897,
				),
			),
			qts : 68,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 9168780427720105366,
			),
			msg_id : 15,
			top_msg_id : 9,
			saved_peer_id : $client->peerUser(
				user_id : -6090511627878058780,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 33,
						reaction : $client->reactionEmpty(...),
						count : 8,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 80,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 88,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -1343745511407233916,
		),
		$client->updateBotMenuButton(
			bot_id : -6235523252939873862,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 7417210780260497528,
			),
			msg_id : 7,
			transcription_id : 4447173844766719298,
			text : 'B81yGMoJOCgz9RmV',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 8084357493882826000,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 6653677016343318818,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 3875721418059335882,
			),
			msg_id : 16,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 62,
					h : 7,
					thumb : $client->photoSizeEmpty(
						type : 'eO6U8bw4Bn2hWfHq',
					),
					video_duration : 34,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 7675680743929376089,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 8090261035032918862,
			),
			story : $client->storyItemDeleted(
				id : 94,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -1212509310654260136,
			),
			max_id : 44,
		),
		$client->updateStoryID(
			id : 37,
			random_id : -4614775682743370327,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 74,
				cooldown_until_date : 56,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 2924001583840155645,
			),
			story_id : 53,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 2546672960107861626,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'ONn7XbI5qaQfPm4R',
				user_id : 1254237675577447627,
				giveaway_msg_id : 97,
				date : 5,
				expires : 75,
				used_gift_slug : 'w4qzCfBtYSsoNgM9',
				multiplier : 81,
				stars : -5662228315131056235,
			),
			qts : 36,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -4639627043239959496,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -6310000551593323422,
			),
			wallpaper : $client->wallPaper(
				id : -1299669738807377957,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 7149289924351938353,
				slug : 'nDQlgiwB1XhPmqKO',
				document : $client->documentEmpty(
					id : 7176173457829884982,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 40,
					second_background_color : 17,
					third_background_color : 84,
					fourth_background_color : 33,
					intensity : 58,
					rotation : 74,
					emoticon : 'JbYCE9wv6nkr3uzq',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -6464756175612840463,
			),
			msg_id : 20,
			date : 56,
			actor : $client->peerUser(
				user_id : 6233800121325881421,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'U2lF9DMGIJtmbVBa',
				),
				$client->reactionCustomEmoji(
					document_id : -1867340792849112161,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '1ZYrc7DEQKhpwtNf',
				),
				$client->reactionCustomEmoji(
					document_id : -5327831981765785951,
				),
				$client->reactionPaid(),
			),
			qts : 47,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -4167743398876790652,
			),
			msg_id : 12,
			date : 40,
			reactions : array(
				$client->reactionCount(
					chosen_order : 62,
					reaction : $client->reactionEmpty(),
					count : 46,
				),
			),
			qts : 7,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -9152714632729865645,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 3413098602299445125,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 90,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'U594w3XC8gIixLWf',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 25,
					shortcut : 'KhRVtzoSIgd7QmOv',
					top_message : 53,
					count : 84,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 10,
				shortcut : 'th6ixre054pRu9DO',
				top_message : 1,
				count : 26,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 36,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 57,
				peer_id : $client->peerUser(
					user_id : 2029543053546755129,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 80,
			messages : array(28),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'bcFX7wRZeG3LvYzN',
				user_id : -7895372766665105168,
				dc_id : 91,
				date : 63,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 60,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'wSsP1ioY3URp5Tzr',
			message : $client->messageEmpty(
				id : 78,
				peer_id : $client->peerUser(
					user_id : 5486575733775866900,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 66,
				peer_id : $client->peerUser(
					user_id : 8065403781125771647,
				),
			),
			qts : 66,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : '5qm2TpJMnjEr0yak',
			message : $client->messageEmpty(
				id : 9,
				peer_id : $client->peerUser(
					user_id : -1705980613604457215,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 81,
				peer_id : $client->peerUser(
					user_id : -2628505084140427690,
				),
			),
			qts : 57,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'nlwIRKFvhBMYEfbx',
			peer : $client->peerUser(
				user_id : -4939003596825847287,
			),
			messages : array(15),
			qts : 2,
		),
		$client->updateNewStoryReaction(
			story_id : 84,
			peer : $client->peerUser(
				user_id : -5711242490424386632,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 4354532161229961913,
				nanos : 50,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 4729749779133884436,
			user_id : 1632318215331126092,
			connection_id : '2ZKOuiyntrb9XoI5',
			message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(
					user_id : 4424395728333532370,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 97,
				peer_id : $client->peerUser(
					user_id : -4306845106700841470,
				),
			),
			chat_instance : 7410045120538736532,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -3392373920187456092,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -538435623454701617,
					nanos : 46,
				),
				available_balance : $client->starsAmount(
					amount : 8973327707177873919,
					nanos : 11,
				),
				overall_revenue : $client->starsAmount(
					amount : -6431652457962441530,
					nanos : 30,
				),
				next_withdrawal_at : 93,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 8246015549520825299,
			payload : 'RaXf8DZ1qwokvgcK',
			qts : 1,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 86,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 53,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -3300609908681470582,
				access_hash : -7715104979678952821,
			),
			sub_chain_id : 66,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 27,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 1954445681284781811,
			saved_peer_id : $client->peerUser(
				user_id : 2916687975250769837,
			),
			read_max_id : 67,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 6115372305032858690,
			saved_peer_id : $client->peerUser(
				user_id : 6515300745001946579,
			),
			read_max_id : 7,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -6305792373438458498,
			saved_peer_id : $client->peerUser(
				user_id : 4121398104052601168,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 7145176678894338566,
				access_hash : 9109493231172045130,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 41,
				from_id : $client->peerUser(
					user_id : 3796337979105595178,
				),
				date : 81,
				message : $client->textWithEntities(
					text : 'qjIht84EQTLAngoB',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				paid_message_stars : -30840423643935873,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -2041777518616129741,
				access_hash : 6406207733100047539,
			),
			from_id : $client->peerUser(
				user_id : 1573040609151008934,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 8809368190931669708,
			),
			topic_id : 63,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -7111453737719801847,
			),
			order : array(33),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -4138057368327092324,
				access_hash : 1610876469310000092,
			),
			messages : array(27),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 3049754577782735597,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -2508602882815113341,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 3485936893289703961,
				bid_date : 24,
				min_bid_amount : -8325907834781926271,
				bid_peer : $client->peerUser(
					user_id : -2282884821756477221,
				),
				acquired_count : 13,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
		$client->updateChatParticipantRank(
			chat_id : -1608805453911789956,
			user_id : 2398621179731445748,
			rank : 'QM3pDN8mzyP041Ah',
			version : 81,
		),
		$client->updateManagedBot(
			user_id : -7920339564996083681,
			bot_id : 5247134843177832875,
			qts : 84,
		),
		$client->updateBotGuestChatQuery(
			query_id : -1216542505219349377,
			message : $client->messageEmpty(
				id : 23,
				peer_id : $client->peerUser(
					user_id : -4537455722067446462,
				),
			),
			reference_messages : array(
				$client->messageEmpty(
					id : 64,
					peer_id : $client->peerUser(
						user_id : -1776234521231974600,
					),
				),
				$client->message(
					out : true,
					mentioned : true,
					media_unread : true,
					silent : true,
					post : true,
					from_scheduled : true,
					legacy : true,
					edit_hide : true,
					pinned : true,
					noforwards : true,
					invert_media : true,
					offline : true,
					video_processing_pending : true,
					paid_suggested_post_stars : true,
					paid_suggested_post_ton : true,
					id : 65,
					from_id : $client->peerUser(
						user_id : -8404895071351128869,
					),
					from_boosts_applied : 50,
					from_rank : 'H32hVrbCgRAZq0Ny',
					peer_id : $client->peerUser(
						user_id : -7235300008985631533,
					),
					saved_peer_id : $client->peerUser(
						user_id : -3177118382441921400,
					),
					fwd_from : $client->messageFwdHeader(
						imported : true,
						saved_out : true,
						from_id : $client->peerUser(...),
						from_name : 'hX3Ceyf026WopFwD',
						date : 9,
						channel_post : 1,
						post_author : 'mUub5goIFWVsHXJB',
						saved_from_peer : $client->peerUser(...),
						saved_from_msg_id : 58,
						saved_from_id : $client->peerUser(...),
						saved_from_name : 'iD37EnWYrsa1BQKy',
						saved_date : 38,
						psa_type : 'jvYTSHZMmt10nxwq',
					),
					via_bot_id : -8424339138327058408,
					via_business_bot_id : 8291877902665833259,
					guestchat_via_from : $client->peerUser(
						user_id : 7634920038387478057,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_msg_id : 89,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 51,
						quote_text : 'jtK6URMxGhi9Hd0L',
						quote_entities : array(
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 87,
						todo_item_id : 88,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 55,
					message : 'epyOiTSlELP7kR9Y',
					media : $client->messageMediaEmpty(),
					reply_markup : $client->replyKeyboardHide(
						selective : true,
					),
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 51,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 19,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 20,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 0,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 45,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 50,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 77,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 75,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 98,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 65,
							language : 'RkI8Pr6UD7OJtZuy',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 44,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 72,
							user_id : -1612195323310911418,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 43,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 78,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 7,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 51,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 11,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 26,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 12,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 77,
							document_id : -8456300196520699074,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 36,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 1,
							date : 72,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 40,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 4,
							old_text : 'pDUYMo4502kcAX1C',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 31,
						),
					),
					views : 34,
					forwards : 73,
					replies : $client->messageReplies(
						comments : true,
						replies : 9,
						replies_pts : 34,
						recent_repliers : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
						channel_id : -1662086083410012023,
						max_id : 67,
						read_max_id : 34,
					),
					edit_date : 38,
					post_author : 'ZL6m2z0kcbujJwsr',
					grouped_id : -2209052310749176658,
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
					restriction_reason : array(
						$client->restrictionReason(
							platform : 'd2Wq59h6PRjwZQ8s',
							reason : 'tTgACNBlv8Qfzh4a',
							text : 'FQnwfWZNuqIRKL1d',
						),
					),
					ttl_period : 78,
					quick_reply_shortcut_id : 7,
					effect : -5454062078452241590,
					factcheck : $client->factCheck(
						need_check : true,
						country : 'AphTWcevJ31azLMF',
						text : $client->textWithEntities(...),
						hash : 0,
					),
					report_delivery_until_date : 86,
					paid_message_stars : 4632442862440245211,
					suggested_post : $client->suggestedPost(
						accepted : true,
						rejected : true,
						price : $client->starsAmount(...),
						schedule_date : 43,
					),
					schedule_repeat_period : 91,
					summary_from_language : 'x7chjy4N2pRtPWZI',
				),
				$client->messageService(
					out : true,
					mentioned : true,
					media_unread : true,
					reactions_are_possible : true,
					silent : true,
					post : true,
					legacy : true,
					id : 15,
					from_id : $client->peerUser(
						user_id : 4043862857171284496,
					),
					peer_id : $client->peerUser(
						user_id : -975354183165335696,
					),
					saved_peer_id : $client->peerUser(
						user_id : 1179992932741383271,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_msg_id : 46,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 5,
						quote_text : '6EYXOzJvj28mqHyQ',
						quote_entities : array(
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 32,
						todo_item_id : 24,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 12,
					action : $client->messageActionEmpty(),
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
					ttl_period : 42,
				),
			),
			qts : 76,
		),
		$client->updateAiComposeTones(),
	),
	users : array(
		$client->userEmpty(
			id : 8623120951371830992,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			id : -8916659586517540968,
			access_hash : -6425636159663244533,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 91,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LuzTF2i69QKwhbRM',
					reason : 'Ylca2Z7Eb1jGswIU',
					text : 'cMNlaCnfsQ5Ak8hS',
				),
			),
			bot_inline_placeholder : 'hygvtWEMskp5PRUO',
			lang_code : 'hnO4bURfQZIlt8H0',
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
				max_id : 13,
			),
			color : $client->peerColor(
				color : 76,
				background_emoji_id : -189855531115857039,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : 4757410300602818562,
			),
			bot_active_users : 56,
			bot_verification_icon : 8034531561652421,
			send_paid_messages_stars : -1579795224493409890,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5676599992003344644,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5275000829139499981,
			title : 'vUdPo5IpORuDLf3J',
			photo : $client->chatPhotoEmpty(),
			participants_count : 65,
			date : 63,
			version : 81,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 13,
			),
		),
		$client->chatForbidden(
			id : -1599047761237212044,
			title : '2f9bI8jZ1JdTnlQF',
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
			id : 5382540091342668283,
			access_hash : -2397845417289511065,
			title : 'JtRQ15lBEaiWTxrY',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TIBFR9JdwSxtVeLf',
					reason : '1Xblw2NIkY6m8UZL',
					text : 'zOrTCU4DR3b0N9Gf',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 3,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 9,
			),
			participants_count : 77,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 50,
			),
			color : $client->peerColor(
				color : 80,
				background_emoji_id : -7598342682434483843,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : 749683345454075416,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 27,
			subscription_until_date : 2,
			bot_verification_icon : -9176666425416321209,
			send_paid_messages_stars : -15328299797816135,
			linked_monoforum_id : -6370361005828535647,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5494797788171612194,
			access_hash : 7157976250404895963,
			title : 'nUxOB305A8rVXfRh',
			until_date : 20,
		),
	),
	date : 45,
	seq_start : 21,
	seq : 42,
);
```